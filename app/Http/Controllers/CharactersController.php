<?php

namespace App\Http\Controllers;

use function view;

class haractersController extends Controller
{
    private const SUB_HEADING = 'CHARACTER SELECT';

    public function create()
    {
        return view('content.characters')->with('subHeading', self::SUB_HEADING);
    }
}
