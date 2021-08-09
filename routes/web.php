<?php

use App\Http\Livewire\Contact;
use App\Http\Livewire\History;
use App\Http\Livewire\News;
use App\Http\Livewire\PopCulturePauseScreen;
use App\Http\Livewire\Store;
use App\Http\Livewire\Library;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

Route::get('{view}', function ($view) {

    if (view()->exists("content.{$view}") === false) {
        redirect('/');
    }

    return view("content.{$view}");

})->where('view', '[A-z_\-]+');

// Route::get('/', News::class);

// Route::get('news', News::class);

// Route::get('history', History::class);

// Route::get('store', Store::class);

// Route::get('popCulturePauseScreen', PopCulturePauseScreen::class);

// Route::get('library', Library::class);

// Route::get('contact', Contact::class);
