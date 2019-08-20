<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Truck;
use App\Models\Review;
use App\Models\Menu;
use App\Models\Schedule;
use Session;

class foodTruckController extends Controller
{
    public function main($idTruck)
    {
        $foodTruck = Truck::where("id_truck", $idTruck)->get();
        if (count($foodTruck) === 0) return redirect()->route('index');
        $foodTruck = $foodTruck[0];

        $reviews = Review::where("id_truck", $idTruck)->get();
        $avg_rate = 0;
        if (count($reviews) > 0) {
            foreach ($reviews as $review) {
                $avg_rate += $review->rate;
            }
            $avg_rate = round($avg_rate / count($reviews));
        }
        $schedules = Schedule::where("id_truck", $idTruck)->orderby('weekday')->orderby('start_time')->get();
        $menus = Menu::where("id_truck", $idTruck)->get();

        return view("foodtruckinfo", ["foodtruck" => $foodTruck, "avg_rate" => $avg_rate, "reviews" => $reviews, "menus" => $menus, "schedules" => $schedules]);
    }

    // Favorite control
    public function getFavorite($idTruck)
    {
        if (!Session::has('id_user')) return 0;

        $favorite = Favorite::where('id_user', Session::get('id_user'))->where('id_truck', $idTruck)->first();
        if ($favorite != null) return 1;
        return 0;
    }
    public function setFavorite($idTruck)
    {
        if (is_int($idTruck) && Session::has('id_user')) {
            $favorite = Favorite::where('id_user', Session::get('id_user'))->where('id_truck', $idTruck)->first();
            if ($favorite == null) {
                $favorite = new Favorite();
                $favorite->id_truck = $idTruck;
                $favorite->id_user = Session::get('id_user');
                $favorite->save();
            } else {
                Magazine::destroy($favorite->id_favorite);
            }
        }
        return response()->json(['action' => 'updated']);
    }
}
