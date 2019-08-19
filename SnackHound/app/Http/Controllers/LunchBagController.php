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

    public function addLunchBag($idMenu)
    {
        $lunchBag = [];
        if (Session::has('lunchBag')) $lunchBag = unserialize(Session::get('lunchBag'));
        $found = false;
        for ($i = 0; $i < count($lunchBag); $i++) {
            if ($lunchBag[$i]->idMenu === $idMenu) {
                $found = true;
                $lunchBag[$i]->quantity += 1;
            }
        }
        if (!$found) {
            $object = new stdClass();
            $object->idMenu = $idMenu;
            $object->quantity = 1;
            $lunchBag[] = object;
        }
        Session::put('lunchBag', serialize($lunchBag));

        var_dump($lunchBag);
    }

    public function removeLunchBag($idMenu)
    {
        $lunchBag = [];
        if (Session::has('lunchBag')) $lunchBag = unserialize(Session::get('lunchBag'));
        $remove = -1;
        for ($i = 0; $i < count($lunchBag); $i++) {
            if ($lunchBag[$i]->idMenu === $idMenu) {
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
