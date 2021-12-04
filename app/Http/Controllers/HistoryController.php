<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    private const SUB_HEADING = 'RD HISTORY';

    public function create()
    {
        $histories = History::all()->toArray();

        $historyTitles = [];

        foreach ($histories as $history) {
            if ($history['active']) {
                $historyTitles[] = $history['title'];
            }
        }

        $contentArray = [
            'subHeading' => self::SUB_HEADING,
            'histories' => $historyTitles
        ];
        return view('content.history')->with($contentArray);
    }
}
