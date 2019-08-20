<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Truck;
use App\Models\Review;
use App\Models\Menu;
use App\Models\Schedule;

class MenuController extends Controller
{
    public function main($idTruck){

        $foodTruck = Truck::where("id_truck", $idTruck)->get();
        if (count($foodTruck) === 0) return redirect()->route('index');
        $foodTruck = $foodTruck[0];

        $menus = Menu::where("id_truck", $idTruck)->get();

        return view("menu", ["menus" => $menus, "foodtruck" => $foodTruck]);
    }
}