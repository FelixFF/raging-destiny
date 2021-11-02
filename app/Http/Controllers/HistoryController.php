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
            'contentBoxTitle' => $histories[0]->title, 'contentBoxContent' => $histories[0]->content,
            'contentBoxTitle1' => $histories[1]->title, 'contentBoxContent1' => $histories[1]->content,
            'contentBoxTitle2' => $histories[2]->title, 'contentBoxContent2' => $histories[2]->content,
        ];
        return view('content.history')->with($contentArray);
    }
}
