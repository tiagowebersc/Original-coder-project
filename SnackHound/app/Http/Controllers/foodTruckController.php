<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Truck;

class foodTruckController extends Controller
{
    public function main($idTruck) {
        
        $foodTruck = Truck::where("id_truck" ,$idTruck)->get();
        if (count($foodTruck) === 0) return redirect()->route('index');

        return view("foodtruckinfo", ["foodtruck" => $foodTruck[0]]);

    }
}


