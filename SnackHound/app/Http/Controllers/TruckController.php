<?php

namespace App\Http\Controllers;

use App\Order;
use App\Truck;
use App\View_order;
use DB;
use Illuminate\Http\Request;

class TruckController extends Controller{

    public function getOrders($id) {
        $orders = View_order::all()->where("id_truck", $id);
        $truck = Truck::find($id);

        return view('truckOwnerDashboard', ['orders' => $orders, 'truck' => $truck]);
    }


}
