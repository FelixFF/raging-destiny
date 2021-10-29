<?php

use App\Http\Controllers\HistoryController;
use App\Http\Controllers\CharactersController;
use App\Http\Controllers\NewsController;
use App\Models\History;
use App\Models\SubHeading;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

Route::get('{view}', function ($view) {
    if (view()->exists("content.{$view}") === false) {
        return (new NewsController())->create();
    } else {
        $controllerClass = "App\Http\Controllers\\{$view}Controller";

        if (class_exists($controllerClass)) {
            $controller = new $controllerClass();
        } else {
            throw new Exception("Page doesn't exist", 404);
        }

        return $controller->create();
    }
})->where('view', '[A-z_\-]+');

Route::get('/', function () {
    return (new NewsController())->create();
});
