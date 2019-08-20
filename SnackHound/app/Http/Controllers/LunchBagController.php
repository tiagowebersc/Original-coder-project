<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class LunchBagController extends Controller
{
    public function totalItems()
    {
        $total = 0;
        if (Session::has('lunchBag')) {
            $total =  count(Session::get('lunchBag'));
        }
        return $total;
    }

    public function addLunchBag(Request $request)
    {
        $cookie = Cookie::make('name', 'value', 60);
        return response()->json(['a' => 'dd']);

        //return response()->json(['idMenu' => $request->idMenu, 'quantity' => $request->quantity]);

        if ($request->quantity === 0) {
            Self::removeLunchBag($request->idMenu);
        } else {
            $lunchBag = [];

            if (Session::has('lunchBag')) {
                $lunchBag = unserialize(Session::get('lunchBag'));
            }
            $found = false;
            for ($i = 0; $i < count($lunchBag); $i++) {
                if ($lunchBag[$i]->idMenu === $request->idMenu) {
                    $found = true;
                    $lunchBag[$i]->quantity = $request->quantity;
                }
            }
            if (!$found) {
                $data = [];
                $data['idMenu'] = $request->idMenu;
                $data['quantity'] = 1;
                $lunchBag[] = $data;
            }
            //return response()->json(['onde' => $lunchBag]);


            //Session::put('lunchBag', serialize($lunchBag));
            //return response()->json(['list' => Session::get('lunchBag')]);
        }
        return $request;
    }

    public function removeLunchBag(Request $request)
    {
        $lunchBag = [];
        if (Session::has('lunchBag')) $lunchBag = unserialize(Session::get('lunchBag'));
        $remove = -1;
        for ($i = 0; $i < count($lunchBag); $i++) {
            if ($lunchBag[$i]->idMenu === $request->idMenu) {
                $lunchBag[$i]->quantity -= 1;
                if ($lunchBag[$i]->quantity <= 0) $remove = i;
            }
        }
        if ($remove >= 0) {
            unset($lunchBag[$remove]);
        }
        Session::put('lunchBag', serialize($lunchBag));

        var_dump($lunchBag);
    }

    public function main()
    {
        return view('lunchbag');
    }
}
