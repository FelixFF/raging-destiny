<?php

use App\Models\SubHeading;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

Route::get('{view}', function ($view) {

    if (view()->exists("content.{$view}") === false) {
        redirect('/');
    }

    return view("content.{$view}", ['subHeading' => SubHeading::getViewSubHeading($view)]);

})->where('view', '[A-z_\-]+');

Route::get('/', function () {
    return view('content.news');
});

// Route::get('news', News::class);

// Route::get('history', History::class);

// Route::get('store', Store::class);

// Route::get('popCulturePauseScreen', PopCulturePauseScreen::class);

// Route::get('library', Library::class);

// Route::get('contact', Contact::class);
