<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Truck;
use Session;
use Cookie;

class LunchBagController extends Controller
{
    public function totalItems()
    {
        $total = 0;
        if (Cookie::get('lunchBag') != null) {
            $total =  count(unserialize(Cookie::get('lunchBag')));
        }
        return $total;
    }

    public function totalPriceItems()
    {
        $total = 0;
        if (Cookie::get('lunchBag') != null) {
            $lunchBagList = unserialize(Cookie::get('lunchBag'));
            foreach ($lunchBagList as $item) {
                $total += ($item['quantity'] * Menu::where('id_menu', $item['idMenu'])->first()->price);
            }
        }
        return $total;
    }

    public function addLunchBag(Request $request)
    {
        if ($request->quantity == 0) {
            Self::removeLunchBag($request);
        } else {
            $lunchBag = [];
            if (Cookie::get('lunchBag') != null)  $lunchBag = unserialize(Cookie::get('lunchBag'));

            $found = false;
            for ($i = 0; $i < count($lunchBag); $i++) {
                if ($lunchBag[$i]['idMenu'] === $request->idMenu) {
                    $found = true;
                    $lunchBag[$i]['quantity'] = $request->quantity;
                }
            }
            if (!$found) {
                $data = [];
                $data['idMenu'] = $request->idMenu;
                $data['quantity'] = $request->quantity;
                $lunchBag[] = $data;
            }
            Cookie::queue('lunchBag', serialize($lunchBag), 60 * 12);
        }
        return response()->json(['action' => 'included']);
    }

    public function removeLunchBag(Request $request)
    {
        $lunchBag = [];
        if (Cookie::get('lunchBag') != null) $lunchBag = unserialize(Cookie::get('lunchBag'));
        $remove = -1;


        for ($i = 0; $i < count($lunchBag); $i++) {
            if ($lunchBag[$i]['idMenu'] == $request->idMenu) {
                $remove = $i;
                break;
            }
        }

        $return = 0;
        if ($remove >= 0) {
            $return = 1;
            array_splice($lunchBag, $remove, 1);
        }
        Cookie::queue('lunchBag', serialize($lunchBag), 60 * 12);
        return response()->json(['removed' => $return]);
    }

    public function main()
    {
        $total = 0;
        $ftList = [];
        if (Cookie::get('lunchBag') != null) {
            $lunchBagList = unserialize(Cookie::get('lunchBag'));
            foreach ($lunchBagList as $item) {
                $menu = Menu::where('id_menu', $item['idMenu'])->first();
                $menu->quantity = $item['quantity'];
                $menu->total = $menu->price * $menu->quantity;
                // total price
                $total += $menu->total;

                $found = false;
                for ($i = 0; $i < count($ftList); $i++) {
                    if ($menu->id_truck == $ftList[$i]['idTruck']) {
                        $tempList = $ftList[$i]['list'];
                        $tempList[] = $menu;
                        $ftList[$i]['list'] = $tempList;
                        $found = true;
                        break;
                    }
                }
                if (!$found) {
                    $name = Truck::where('id_truck', $menu->id_truck)->first()->name;
                    $ftList[] = ['idTruck' => $menu->id_truck, 'name' => $name, 'list' => [$menu]];
                }
            }
        }
        return view('lunchbag', ['total' => $total, 'ftList' => $ftList]);
    }
}
