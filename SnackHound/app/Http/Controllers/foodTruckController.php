<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Truck;
use App\Models\Review;

class foodTruckController extends Controller
{
    public function main($idTruck) {
        
        // create a link to each truck by ID --->
        $foodTruck = Truck::where("id_truck" ,$idTruck)->get();
        if (count($foodTruck) === 0) return redirect()->route('index');

        $reviews = Review::where("id_truck" ,$idTruck)->get();


        return view("foodtruckinfo", ["foodtruck" => $foodTruck[0], "reviews" => $reviews]);

    }
}


