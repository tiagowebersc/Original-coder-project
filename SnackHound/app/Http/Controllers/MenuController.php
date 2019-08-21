<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Truck;
use Session;
use File;
use Storage;
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
                    $menu = Menu::find($request->menuId);
                } else {
                    $menu = new Menu;
                }

                //! INFORMATIONS FOR THE UPDATE

                if ($request->hasFile('upload')) {

                    $path = public_path('assets/IMGS/Menu/' . $truck->id_truck);

                    if(!File::isDirectory($path)){
                        File::makeDirectory($path);
                    }

                    // $try = $request->upload->store('asdad', 'public/assets');
                    // $img = Storage::putFile($path, $request->file('upload'));
                }

                $menu->id_truck = $truck->id_truck;
                $menu->name = $request->itemName;
                $menu->description = $request->itemDescription;
                $menu->price = $request->itemPrice;
                $menu->available = 1;
                $menu->image = 'test';
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
}
