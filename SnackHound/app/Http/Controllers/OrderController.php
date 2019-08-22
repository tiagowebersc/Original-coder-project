<?php

namespace App\Http\Controllers;

use App\Models\View_order_item;
use App\Models\View_order;
use App\Models\Order;
use App\Models\Truck;
use App\Models\Review;
use Illuminate\Http\Request;
use Session;


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
        if(!isset($request->idTruck)) return redirect()->route('lunchBag');
        $truck = Truck::where('id_truck', $request->idTruck)->first();
        if($truck == null) if(!isset($request->idTruck)) return redirect()->route('lunchBag');
        
        $avg_rate = 0;
        $reviews = Review::where("id_truck", $request->idTruck)->get();
        if (count($reviews) > 0) {
            foreach ($reviews as $review) {
                $avg_rate += $review->rate;
            }
            $avg_rate = round($avg_rate / count($reviews));
        }
        $favorite = app(\App\Http\Controllers\foodTruckController::class)->getFavorite($request->idTruck);

        return view('orderconfirmation', ['truck'=> $truck, 'avg_rate' => $avg_rate, 'total_reviews' => count($reviews), 'favorite' => $favorite]);
    }
}
