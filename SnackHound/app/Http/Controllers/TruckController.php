<?php

namespace App\Http\Controllers;

use App\Models\Order;
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
        // CREATE A NEW VIEW (USER, ORDER, ORDER CONTENT)
        // NOT WORKING

        if (Session::get('user_type') === 1) {

            $userId = Session::get('id_user');

            $truck = Truck::where('id_user', $userId)->first();

            if($request->typeSearch === "user") {
                // Search orders by users
            } else if($request->typeSearch === "date") {
                // Search orders by date
                $orders = View_order::where("id_truck", $userId)->whereBetween('created_at', [$request->fromDate, $request->toDate])->get();
                $ordersCount = View_order::where("id_truck", $userId)->whereBetween('created_at', [$request->fromDate, $request->toDate])->count();

            } else {
                // Search orders by amount
                $orders = View_order::where("id_truck", $userId)->whereBetween('total', [$request->fromAmount, $request->toAmount])->get();
                $ordersCount = View_order::where("id_truck", $userId)->whereBetween('total', [$request->fromAmount, $request->toAmount])->count();
            }

            // If user inserted info, return filtered, if not return all
            if(isset($orders) && isset($ordersCount)) {
                return view('truckOwnerDashboard', ['orders' => $orders, 'truck' => $truck, 'ordersCount' => $ordersCount]);
            } else {
                return $this->getOrders();
            }


         } else {
             // If user is not a truck owner, return to index
             return redirect()->route('index');
         }

    }
}
