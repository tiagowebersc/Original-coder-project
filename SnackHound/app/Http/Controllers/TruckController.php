<?php

namespace App\Http\Controllers;

use App\Order;
use App\Truck;
use Illuminate\Http\Request;

class TruckController extends Controller{

    public function getOrders($id) {
        $orders = Order::all()->where("id_truck", $id);
        $truck = Truck::find($id);

        return view('truckOwnerDashboard', ['orders' => $orders, 'truck' => $truck]);
    }


}
