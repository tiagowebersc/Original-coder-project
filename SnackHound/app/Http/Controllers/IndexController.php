<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Truck;
use App\Models\Food_category;
use App\Models\Schedule;
use App\Models\Truck_food_category;
use App\Models\View_foodtruck_category;

class IndexController extends Controller
{
    public function index()
    {
        $trucks = Self::foodTruckList();
        $categories = Food_category::ALL();
        return view('index', ['trucks' => $trucks, 'categories' => $categories]);
    }

    public function filterCategory(Request $request)
    {
        $trucks =  Self::filteredFoodTruckList($request->categoryId);
        $categories = Food_category::ALL();
        // $category = Food_category::find($id);
        return view('index', ['trucks' => $trucks, 'categories' => $categories, 'category_selected' => $request->categoryId]);
    }

    public function foodTruckList()
    {
        $result = [];
        $trucks = Truck::all();
        if (count($trucks) > 0) {
            foreach ($trucks as $truck) {


                $queryResult = DB::select("(SELECT s.latitude, s.longitude, s.weekday, s.start_time, s.end_time
                                              FROM schedule s
                                             WHERE ((s.weekday = WEEKDAY(CURDATE()) AND s.end_time >= CURTIME()) OR (s.weekday > WEEKDAY(CURDATE())))
                                               AND s.id_truck = ?
                                             ORDER BY s.weekday, s.start_time)
                                           UNION
                                           (SELECT s.latitude, s.longitude, s.weekday, s.start_time, s.end_time
                                              FROM schedule s
                                             WHERE s.id_truck = ?
                                             ORDER BY s.weekday, s.start_time)", [$truck->id_truck, $truck->id_truck]);
                if (count($queryResult) > 0) {
                    // take the first option

                    $truckReview = DB::select('SELECT avg(rate) as rate, count(id_review) as numReviews FROM review WHERE id_truck = ? ', [$truck->id_truck]);

                    if (isset($truckReview[0]->rate)) {
                        $truck->avgRate = $truckReview[0]->rate;
                        $truck->reviewsNbr = $truckReview[0]->numReviews;
                    } else {
                        $truck->avgRate = 0;
                        $truck->reviewsNbr = 0;
                    }

                    $queryResult = $queryResult[0];
                    $truck->latitude = $queryResult->latitude;
                    $truck->longitude = $queryResult->longitude;
                    $truck->weekday = $queryResult->weekday;
                    $truck->start_time = $queryResult->start_time;
                    $truck->end_time = $queryResult->end_time;
                    $truck->schedules = Schedule::WHERE('id_truck', $truck->id_truck)->GET();
                    $categories = Truck_food_category::where('id_truck', $truck->id_truck)->GET();


                    for ($i = 0; $i < count($categories); $i++) {
                        $categories[$i]->name = Food_category::where('id_food_category', $categories[$i]->id_food_category)->first()->name;
                    }
                    $truck->categories = $categories;
                    $truck->favorite = app(\App\Http\Controllers\foodTruckController::class)->getFavorite($truck->id_truck);
                    $result[] = $truck;
                }
            }
        }
        return $result;
    }

    public function filteredFoodTruckList($id)
    {

        $result = [];

        $trucks = View_foodtruck_category::where('id_food_category', $id)->get();



        foreach ($trucks as $truck) {
            $queryResult = DB::select("(SELECT s.latitude, s.longitude, s.weekday, s.start_time, s.end_time
                                              FROM schedule s
                                             WHERE ((s.weekday = WEEKDAY(CURDATE()) AND s.end_time >= CURTIME()) OR (s.weekday > WEEKDAY(CURDATE())))
                                               AND s.id_truck = ?
                                             ORDER BY s.weekday, s.start_time)
                                           UNION
                                           (SELECT s.latitude, s.longitude, s.weekday, s.start_time, s.end_time
                                              FROM schedule s
                                             WHERE s.id_truck = ?
                                             ORDER BY s.weekday, s.start_time)", [$truck->id_truck, $truck->id_truck]);

            if (count($queryResult) > 0) {
                // take the first option

                $truckReview = DB::select('SELECT avg(rate) as rate, count(id_review) as numReviews FROM review WHERE id_truck = ? ', [$truck->id_truck]);

                if (isset($truckReview[0]->rate)) {
                    $truck->avgRate = $truckReview[0]->rate;
                    $truck->reviewsNbr = $truckReview[0]->numReviews;
                } else {
                    $truck->avgRate = 0;
                    $truck->reviewsNbr = 0;
                }


                $queryResult = $queryResult[0];
                $truck->latitude = $queryResult->latitude;
                $truck->longitude = $queryResult->longitude;
                $truck->weekday = $queryResult->weekday;
                $truck->start_time = $queryResult->start_time;
                $truck->end_time = $queryResult->end_time;
                $truck->schedules = Schedule::WHERE('id_truck', $truck->id_truck)->GET();
                $categories = Truck_food_category::where('id_truck', $truck->id_truck)->GET();


                for ($i = 0; $i < count($categories); $i++) {
                    $categories[$i]->name = Food_category::where('id_food_category', $categories[$i]->id_food_category)->first()->name;
                }
                $truck->categories = $categories;
                $truck->favorite = app(\App\Http\Controllers\foodTruckController::class)->getFavorite($truck->id_truck);
                $result[] = $truck;
            }
        }

        return $result;
    }
}
