<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Truck;
use App\Models\Review;
use App\Models\Menu;
use App\Models\Schedule;

class AdminEditController extends Controller
{
    public function main() {
        return view("adminedit");
    }
}
