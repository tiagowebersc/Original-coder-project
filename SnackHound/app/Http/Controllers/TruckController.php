<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Schedule;
use App\Models\Truck;
use App\Models\View_order;
use Session;
use Illuminate\Http\Request;

class TruckController extends Controller
{

    public function getOrders(){
        // Check if user is food truck owner
        if (Session::get('user_type') === 1) {
            $userId = Session::get('id_user');

            $truck = Truck::where('id_user', $userId)->first();

            $orders = View_order::where("id_truck", $truck->id_truck)->orderBy('created_at', 'desc')->get();
            $ordersCount = View_order::where("id_truck", $truck->id_truck)->count();

            return view('truckOwnerDashboard', ['orders' => $orders, 'truck' => $truck, 'ordersCount' => $ordersCount]);
         } else {
             // If user is not a truck owner, return to index
             return redirect()->route('index');
         }
    }

    public function filterOrder(Request $request) {

        if (Session::get('user_type') === 1) {

            $userId = Session::get('id_user');

            $truck = Truck::where('id_user', $userId)->first();

                if($request->typeSearch === "user") {
                    // Search orders by users

                    // Because user radio by default is checked, check if the fields and fullfield
                    if((!empty($request->firstName) || !empty($request->lastName) || !empty($request->phone))) {
                        $orders = View_order::where("id_truck", $truck->id_truck)->where([['first_Name', "LIKE", "%" . $request->firstName . "%"],
                        ['last_Name', "LIKE", "%" . $request->lastName . "%"],
                        ['telephone',  $request->phone]])->get();

                        $ordersCount = View_order::where("id_truck", $truck->id_truck)->where([['first_Name', "LIKE", "%" . $request->firstName . "%"],
                        ['last_Name', "LIKE", "%" . $request->lastName . "%"],
                        ['telephone',  $request->phone]])->count();
                    } else {
                        $orders = '';
                        $ordersCount = '';
                    }


                } else if($request->typeSearch === "date") {
                    // Search orders by date
                    $from = date($request->fromDate);
                    $to = date($request->toDate);

                    $orders = View_order::where("id_truck", $truck->id_truck)->whereBetween('created_at', [$from, $to])->get();

                    $ordersCount = View_order::where("id_truck", $truck->id_truck)->whereBetween('created_at', [$from, $to])->count();

                } else if($request->typeSearch === "amount") {
                    // Search orders by amount
                    $orders = View_order::where("id_truck", $truck->id_truck)->whereBetween('total', [$request->fromAmount, $request->toAmount])->get();

                    $ordersCount = View_order::where("id_truck", $truck->id_truck)->whereBetween('total', [$request->fromAmount, $request->toAmount])->count();
                }

                // If user inserted info, return filtered, if not return all
                if(isset($orders) && isset($ordersCount)) {
                    return view('truckOwnerDashboard', ['orders' => $orders, 'truck' => $truck, 'ordersCount' => $ordersCount, 'request' => $request]);
                } else {
                    return self::getOrders();
                }
         } else {
             // If user is not a truck owner, return to index
             return redirect()->route('index');
         }

    }

    public function updateOrders(Request $request) {

        $order = Order::find($request->hiddenId);

        if($request->updateBtn === 'ACCEPT') {
            // ACCEPT ORDER
            $order->status = 1;
            $order->save();

        } else if ($request->updateBtn === 'DELIVERED') {
            // DELIVERED ORDER
            $order->status = 4;
            $order->save();

        } else if (isset($request->cancelBtn)) {
            // CANCEL OR NOT ACCEPTED
            switch($order->status) {
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
        return self::filterOrder($request);
    }

    // SCHEDULE

    public function getSchedule() {
        $userId = Session::get('id_user');
        $truck = Truck::where('id_user', $userId)->first();

        $schedules = Schedule::where('id_truck', $truck->id_truck)->get();
        // return back()->with(['truck' => $truck, 'schedules' => $schedules]);
        return view('truckOwnerSchedule', ['truck' => $truck, 'schedules' => $schedules]);
    }

    public function setSchedule(Request $request) {
        $userId = Session::get('id_user');
        $truck = Truck::where('id_user', $userId)->first();

        $schedule = new Schedule;
        $schedule->id_truck = $truck->id_truck;
        $schedule->latitude = $request->latitude;
        $schedule->longitude = $request->longitude;
        $schedule->city = $request->city;

        switch($request->dayWeek) {
            case 'monday';
            $schedule->weekday = 0;
            break;
            case 'tuesday';
            $schedule->weekday = 1;
            break;
            case 'wednesday';
            $schedule->weekday = 2;
            break;
            case 'thursday';
            $schedule->weekday = 3;
            break;
            case 'friday';
            $schedule->weekday = 4;
            break;
            case 'saturday';
            $schedule->weekday = 5;
            break;
            case 'sunday';
            $schedule->weekday = 6;
            break;
        }

        $schedule->start_time = $request->fromTime;
        $schedule->end_time = $request->toTime;
        $schedule->save();

        $schedules = Schedule::where('id_truck', $truck->id_truck)->get();
        return back()->with(['truck' => $truck, 'schedules' => $schedules]);
    }
}
