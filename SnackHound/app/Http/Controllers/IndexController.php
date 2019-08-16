<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Truck;

class IndexController extends Controller
{
    public function index(){
        $trucks=Self::foodTruckList();
        return view('index',['trucks'=>$trucks]);
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
                    $queryResult = $queryResult[0];
                    $truck->latitude = $queryResult->latitude;
                    $truck->longitude = $queryResult->longitude;
                    $truck->weekday = $queryResult->weekday;
                    $truck->start_time = $queryResult->start_time;
                    $truck->end_time = $queryResult->end_time;
                    $result[] = $truck;
                }
            }
        }
        return $result;
    }
}
