<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    private const SUB_HEADING = 'RD HISTORY';

    public function create()
    {
        $histories = History::all();

        $contentArray = [
            'subHeading' => self::SUB_HEADING,
            'histories' => [
                $histories[0]->title,
                $histories[1]->title,
            ]
        ];
        return view('content.history')->with($contentArray);
    }
}
