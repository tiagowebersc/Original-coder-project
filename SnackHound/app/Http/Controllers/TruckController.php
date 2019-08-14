<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Truck;
use App\Models\View_order;
use DB;
use Illuminate\Http\Request;

class TruckController extends Controller
{

    public function getOrders($id)
    {
        $truck = Truck::find($id);
        $orders = View_order::all()->where("id_truck", $id);

        return view('truckOwnerDashboard', ['orders' => $orders, 'truck' => $truck]);
    }
}
