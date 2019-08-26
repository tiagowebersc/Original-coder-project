<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Truck;
use App\Models\Review;
use App\Models\Menu;
use App\Models\Schedule;
use App\Models\Favorite;
use App\Models\User;
use Session;

class foodTruckController extends Controller
{
    public function main($idTruck)
    {
        
        $foodTruck = Truck::where("id_truck", $idTruck)->get();
        if (count($foodTruck) === 0) return redirect()->route('index');
        $foodTruck = $foodTruck[0];

        
        $reviews = Review::where("id_truck", $idTruck)->orderby('created_at', 'desc')->get();
        foreach ($reviews as $review) {
            $review->userName = User::where("id_user", $review->id_user)->get()->first()->first_name;
        }
        
        $avg_rate = 0;
        if (count($reviews) > 0) {
            foreach ($reviews as $review) {
                $avg_rate += $review->rate;
            }
            $avg_rate = round($avg_rate / count($reviews));
        }
        $schedules = Schedule::where("id_truck", $idTruck)->orderby('weekday')->orderby('start_time')->get();
        $menus = Menu::where("id_truck", $idTruck)->get();
        $favorite = Self::getFavorite($idTruck);

        return view("foodtruckinfo", ["foodtruck" => $foodTruck, "avg_rate" => $avg_rate, "reviews" => $reviews, "menus" => $menus, "schedules" => $schedules, "favorite" => $favorite]);
    }

    public function saveReview(Request $request)
    {
        if (!Session::has('id_user')) return response()->json(['erro' => 'User not defined!']);
        if (!isset($request->idTruck)) return response()->json(['erro' => 'Foodtruck not defined!']);
        if (!isset($request->rate)) return response()->json(['erro' => 'Rate not defined!']);

        $review = new Review();
        $review->id_user = Session::get('id_user');
        $review->id_truck = $request->idTruck;
        $review->rate = $request->rate;
        if (isset($request->comment)) $review->comment = $request->comment;
        $review->save();
        return response()->json('inserted', 1);
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
        $return = 0;
        if (Session::has('id_user')) {
            $favorite = Favorite::where('id_user', Session::get('id_user'))->where('id_truck', $idTruck)->first();
            if ($favorite == null) {
                $favorite = new Favorite();
                $favorite->id_truck = $idTruck;
                $favorite->id_user = Session::get('id_user');
                $favorite->save();
                $return = 1;
            } else {
                Favorite::destroy($favorite->id_favorite);
            }
        }
        return response()->json(['favorite' => $return]);
    }
}
