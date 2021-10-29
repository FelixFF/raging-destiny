<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    private const SUB_HEADING = 'CONTACT';

    public function create()
    {
        return view('content.contact')->with('subHeading', self::SUB_HEADING);
    }
}
