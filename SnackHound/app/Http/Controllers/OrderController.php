<?php

namespace App\Http\Controllers;

use App\Models\View_order_item;
use App\Models\View_order;
use App\Models\Order;
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

    public function updateOrdersDetails($id, Request $request) {

            $order = Order::find($id);

            if($request->updateBtn === 'Accept Order') {
                // ACCEPT ORDER
                $order->status = 1;
                $order->save();

            } else if ($request->updateBtn === 'Delivered') {
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

            return redirect()->route('details', ['id' => $order->id_order]);
        }
    }

