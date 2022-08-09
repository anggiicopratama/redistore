<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleshopController extends Controller
{
    public function singleshop()
    {
        return view('shop-single', [
            'title' => 'Shop...',
        ]);
    }
}
