<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Truck;
use Session;
use File;
use URL;
use Storage;
use Illuminate\Support\Facades\Input;
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

            $truck = Truck::where('id_user', Session::get('id_user'))->first();

            if(isset($truck->id_truck)) {

                if(isset($request->menuId)) {
                    $menu = Menu::find($request->menuId);
                } else {
                    $menu = new Menu;
                }

                //! INFORMATIONS FOR THE UPDATE

                if ($request->hasFile('upload')) {

                    $path = public_path('assets/IMGS/Menu/' . $truck->id_truck);
                    // $path = URL::asset('public/assets/IMGS/Menu/' . $truck->id_truck);

                    if(!File::isDirectory($path)){
                        File::makeDirectory($path);
                    }

                    $fullFileName = $request->file('upload') . "." . $request->file('upload')->extension();

                    $fileName = Input::file('upload')->move($path, $fullFileName);

                    $menu->image = basename($fileName);
                }

                $menu->id_truck = $truck->id_truck;
                $menu->name = $request->itemName;
                $menu->description = $request->itemDescription;
                $menu->price = $request->itemPrice;
                $menu->available = 1;
                $menu->save();

                //! END INFORMATIONS FOR THE UPDATE

                if(isset($request->menuId)) {
                    return self::getMenu();
                } else {
                    $menus = Menu::where("id_truck", $truck->id_truck)->where('available', 1)->get();
                    return back()->with(['menus' => $menus, 'truck' => $truck]);
                }

            } else {
                return redirect()->route('index');
            }
        } else {
            return redirect()->route('index');
        }
    }

    public function getEditMenu(Request $request) {

        if(Session::has('id_user')){
            $truck = Truck::where('id_user', Session::get('id_user'))->first() ;

            if(isset($truck->id_truck)) {

                $menus = Menu::where("id_truck", $truck->id_truck)->where('available', 1)->get();

                $menuEdit = Menu::find($request->menuId);

                return view('menuEdit', ["menus" => $menus, "truck" => $truck, 'menuEdit' =>$menuEdit]);
            } else {
                return redirect()->route('index');
            }
        } else {
            return redirect()->route('index');
        }
    }

    public function deleteMenu($id) {

        if(Session::has('id_user')){

            $truck = Truck::where('id_user', Session::get('id_user'))->first() ;

            if(isset($truck->id_truck)) {
                $menu = Menu::find($id);
                $menu->available = 0;

                $menu->save();

                return redirect()->route('menu');
            } else {
                return redirect()->route('index');
            }
        } else {
            return redirect()->route('index');
        }
    }
}
