<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Truck;
use App\Models\View_order;
use DB;
use Illuminate\Http\Request;

class TruckController extends Controller
{

    public function getOrders()
    {
        // $orders = View_order::all()->where("id_truck", 1);
        $truck = Truck::find(1);
        $orders = View_order::where("id_truck", 1)->orderBy('created_at', 'desc')->get();
        $ordersCount = View_order::where("id_truck", 1)->count();

        return view('truckOwnerDashboard', ['orders' => $orders, 'truck' => $truck, 'ordersCount' => $ordersCount]);
    }

    public function filterOrder(Request $request) {
        // CREATE A NEW VIEW
        // NOR WORKING
        $truck = Truck::find(1);
        $orders = View_order::where("id_truck", 1)->where('created_at', [$request->fromDate, $request->toDate])->get();
        $ordersCount = View_order::where("id_truck", 1)->where('created_at', [$request->fromDate, $request->toDate])->count();

        return view('truckOwnerDashboard', ['orders' => $orders, 'truck' => $truck, 'ordersCount' => $ordersCount]);
    }
}
