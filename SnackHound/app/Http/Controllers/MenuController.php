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

        $menus = Menu::where("id_truck", $idTruck)->get();

        return view("menu", ["menus" => $menus]);
    }
}