<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Truck;
use Session;
use App\Models\Menu;
use App\Models\Schedule;

class MenuController extends Controller{

    public function getMenu(){

        if(Session::has('id_user')){

            $truck = Truck::where('id_user', Session::get('id_user'))->first() ;

            if(isset($truck->id_truck)) {

                $menus = Menu::where("id_truck", $truck->id_truck)->where('available', 1)->get();

                return view("menu", ["menus" => $menus, "truck" => $truck]);

            } else {
                return redirect()->route('index');
            }
        } else {
            return redirect()->route('index');
        }
    }

    public function setMenu(Request $request) {

        if(Session::has('id_user')){

            $truck = Truck::where('id_user', Session::get('id_user'))->first() ;

            if(isset($truck->id_truck)) {




                if(isset($request->menuId)) {
                    return self::getMenu();
                } else {
                    $menus = Menu::where("id_truck", $truck->id_truck)->get();
                    return back()->with(['truck' => $truck, 'menus' => $menus]);
                }

                return view('menu', ['menus' => $menus, 'truck' => $truck]);
            } else {
                return redirect()->route('index');
            }
        } else {
            return redirect()->route('index');
        }
    }
}
