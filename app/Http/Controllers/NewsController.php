<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    private const SUB_HEADING = 'WELCOME TO THE DRIFT';
    private $allNews = [];

    public function create()
    {
        return view('content.news')->with(['subHeading' => self::SUB_HEADING, 'allNews' => News::all()]);
    }
}
