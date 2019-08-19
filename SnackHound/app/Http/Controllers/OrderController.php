<?php

namespace App\Http\Controllers;

use App\Models\View_order_item;
use App\Models\View_order;
use App\Models\Truck;
use Illuminate\Http\Request;
use Session;


class OrderController extends Controller{

    public function detailsOrders($id) {

        if(Session::has('id_user')){

            $truck = Truck::where('id_user', Session::get('id_user'))->first() ;

            $order = View_order::find($id);

            $orderItems = View_order_item::where('id_order', $id)->get();

            if(isset($truck->id_truck) && isset($order->id_truck) && $truck->id_truck === $order->id_truck) {

                return view('truckownerDetail', ['order' => $order, 'truck' => $truck, 'orderItems' => $orderItems]);
            } else {
                return redirect()->route('truck');
            }

        } else {
            return redirect()->route('index');
        }
    }
}
