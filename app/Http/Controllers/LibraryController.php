<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    private const SUB_HEADING = 'THE BOOKS';

    public function create()
    {
        return view('content.library')->with('subHeading', self::SUB_HEADING);
    }
}
