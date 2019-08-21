<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Schedule;
use App\Models\Truck;
use App\Models\View_order;
use App\Models\Favorite;
use Session;
use Illuminate\Http\Request;

class AdminEditController extends Controller
{
    public function getUsers() {
        return view("adminedit");
    }
}
