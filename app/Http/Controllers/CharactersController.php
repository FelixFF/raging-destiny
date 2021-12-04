<?php

namespace App\Http\Controllers;

use App\Models\Characters;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    private const SUB_HEADING = 'CHARACTER SELECT';

    public function create()
    {
        return view('content.characters')->with('subHeading', self::SUB_HEADING);
    }
}
