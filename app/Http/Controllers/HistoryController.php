<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    private const SUB_HEADING = 'RD HISTORY';

    public function create()
    {
        return view('content.history')->with(['subHeading' => self::SUB_HEADING, 'contentBoxTitle' => History::first()->title, 'contentBoxContent' => History::first()->content]);
    }
}
