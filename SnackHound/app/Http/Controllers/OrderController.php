<?php

namespace App\Http\Controllers;

use App\Models\View_order_item;
use App\Models\View_order;
use App\Models\Order;
use App\Models\Truck;
use App\Models\Review;
use App\Models\Menu;
use App\Models\User;
use App\Models\Order_item;
use Illuminate\Http\Request;
use Session;
use Cookie;
use Mail;
use DB;


class OrderController extends Controller
{

    public function detailsOrders($id)
    {

        if (Session::has('id_user')) {

            $truck = Truck::where('id_user', Session::get('id_user'))->first();

            $order = View_order::find($id);

            $orderItems = View_order_item::where('id_order', $id)->get();

            if (isset($truck->id_truck) && isset($order->id_truck) && $truck->id_truck === $order->id_truck) {

                return view('truckOwnerDetail', ['order' => $order, 'truck' => $truck, 'orderItems' => $orderItems]);
            } else {
                return redirect()->route('truck');
            }
        } else {
            return redirect()->route('index');
        }
    }

    public function updateOrdersDetails($id, Request $request)
    {

        $order = Order::find($id);

        if ($request->updateBtn === 'Accept Order') {
            // ACCEPT ORDER
            $order->status = 1;
            $order->save();
        } else if ($request->updateBtn === 'Delivered') {
            // DELIVERED ORDER
            $order->status = 4;
            $order->save();
        } else if (isset($request->cancelBtn)) {
            // CANCEL OR NOT ACCEPTED
            switch ($order->status) {
                    // NOT ACCEPTED
                case 0:
                    $order->status = 2;
                    break;
                    // CANCELLED
                case 1:
                    $order->status = 3;
                    break;
            }
            $order->save();
        }

        return redirect()->route('details', ['id' => $order->id_order]);
    }

    public function generateOrder(Request $request)
    {
        // go to login if is not connected
        if (!Session::has('id_user')) {
            return redirect()->action(
                'UserController@login',
                ['redirect' => 'lunchBag']
            );
        }
        // if there is not truck go back to lunchbag
        if (!isset($request->idTruck)) return redirect()->route('lunchBag');
        $truck = Truck::where('id_truck', $request->idTruck)->first();
        if ($truck == null) if (!isset($request->idTruck)) return redirect()->route('lunchBag');

        // code stuff here ;)
        $items = [];
        if (Cookie::get('lunchBag') != null) $lunchBag = unserialize(Cookie::get('lunchBag'));
        for ($i = 0; $i < count($lunchBag); $i++) {
            $menu = Menu::where('id_menu', $lunchBag[$i]['idMenu'])->first();
            if ($menu != null) {
                if ($menu->id_truck == $truck->id_truck) {
                    $items[] = ['idx' => $i, 'menu' => $menu, 'quantity' => $lunchBag[$i]['quantity']];
                }
            }
        }

        if (count($items) <= 0) return redirect()->route('lunchBag');
        // create order resume
        $order = new Order();
        $order->id_truck = $truck->id_truck;
        $order->id_user = Session::get('id_user');
        $order->status = 0; // pending to approval
        $order->save();
        // go backwards to remove because if starts from the beginnig it will change the index
        // and create the order items
        for ($i = (count($items) - 1); $i >= 0; $i--) {
            array_splice($lunchBag, $items[$i]['idx'], 1);
            $orderItem = new Order_item();
            $orderItem->id_order = $order->id_order;
            $orderItem->id_menu = $items[$i]['menu']->id_menu;
            $orderItem->price = $items[$i]['menu']->price;
            $orderItem->quantity = $items[$i]['quantity'];
            $orderItem->save();
        }
        // update the lunchbag cookie
        Cookie::queue('lunchBag', serialize($lunchBag), 60 * 12);
        // send email
        $user = User::where('id_user', $order->id_user)->first();
        $name = $user->first_name . ' ' . $user->last_name;
        $email = $user->email;
        $data = ['name' => $name, 'foodTruckName' => $truck->name];

        try {
            Mail::send('mailConfirm', $data, function ($message) use ($name, $email) {
                $message->to($email, $name)->subject('Order has been placed and is awaiting approval');
                $message->from('snackhound.lux@gmail.com', 'Snack Hound');
            });
        } catch (Exception $e) {
            // if there is a problem with the email to not mess up the order itself
        }

        // return values
        $avg_rate = 0;
        $reviews = Review::where("id_truck", $request->idTruck)->get();
        if (count($reviews) > 0) {
            foreach ($reviews as $review) {
                $avg_rate += $review->rate;
            }
            $avg_rate = round($avg_rate / count($reviews));
        }
        $favorite = app(\App\Http\Controllers\foodTruckController::class)->getFavorite($request->idTruck);
        // default lux address
        $latitude = 49.609266;
        $longitude = 6.129368;
        $queryResult = DB::select("(SELECT s.latitude, s.longitude, s.weekday, s.start_time, s.end_time
                                              FROM schedule s
                                             WHERE ((s.weekday = WEEKDAY(CURDATE()) AND s.end_time >= CURTIME()) OR (s.weekday > WEEKDAY(CURDATE())))
                                               AND s.id_truck = ?
                                             ORDER BY s.weekday, s.start_time)
                                           UNION
                                           (SELECT s.latitude, s.longitude, s.weekday, s.start_time, s.end_time
                                              FROM schedule s
                                             WHERE s.id_truck = ?
                                             ORDER BY s.weekday, s.start_time)", [$truck->id_truck, $truck->id_truck]);
        if (count($queryResult) > 0) {
            $latitude = $queryResult[0]->latitude;
            $longitude = $queryResult[0]->longitude;
        }

        return view('orderconfirmation', ['truck' => $truck, 'latitude' => $latitude, 'longitude' => $longitude, 'avg_rate' => $avg_rate, 'total_reviews' => count($reviews), 'favorite' => $favorite]);
    }
}
