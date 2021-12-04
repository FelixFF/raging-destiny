<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    private const SUB_HEADING = 'SHOP';

    public function create()
    {
        return view('content.store')->with('subHeading', self::SUB_HEADING);
    }
}
