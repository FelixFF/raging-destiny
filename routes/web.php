<?php

use App\Http\Controllers\HistoryController;
use App\Models\History;
use App\Models\SubHeading;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

Route::get('{view}', function ($view) {

    if (view()->exists("content.{$view}") === false) {
        redirect('/');
    }

    if ($view === 'history') {
        return view("content.{$view}", ['subHeading' => SubHeading::getViewSubHeading($view), 'contentBoxTitle' => History::first()->title, 'contentBoxContent' => History::first()->content]);
    } else {
        return view("content.{$view}", ['subHeading' => SubHeading::getViewSubHeading($view)]);
    }

})->where('view', '[A-z_\-]+');

Route::get('/', function () {
    return view('content.news', ['subHeading' => SubHeading::getViewSubHeading('news')]);
});
