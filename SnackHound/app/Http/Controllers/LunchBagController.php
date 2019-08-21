<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
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

    public function addLunchBag(Request $request)
    {
        if ($request->quantity === 0) {
            Self::removeLunchBag($request->idMenu);
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
                $data['quantity'] = 1;
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
            if ($lunchBag[$i]['idMenu'] === $request->idMenu) {
                $lunchBag[$i]['quantity'] -= 1;
                if ($lunchBag[$i]['quantity'] <= 0) $remove = i;
            }
        }
        if ($remove >= 0) {
            unset($lunchBag[$remove]);
        }
        Cookie::queue('lunchBag', serialize($lunchBag), 60 * 12);

        return response()->json(['action' => 'removed']);
    }

    public function main()
    {
        $total = 0;
        $itemList = [];
        if (Cookie::get('lunchBag') != null) {
            $lunchBagList = unserialize(Cookie::get('lunchBag'));
            foreach ($lunchBagList as $item) {

                $menu = Menu::where('id_menu', $item['idMenu'])->first();
                $menu->quantity = $item['quantity'];
                $menu->total = $menu->price * $menu->quantity;
                $total += $menu->total;
                $itemList[] = $menu;
            }
        }


        return view('lunchbag', ['total' => $total, 'itemList' => $itemList]);
    }
}
