<?php

use App\Http\Controllers\NewsController;
use App\Models\SubHeading;
use Illuminate\Support\Facades\Route;

Route::get('{view}', function ($view) {
    if (view()->exists("content.{$view}") === false) {
        return (new NewsController())->create();
    } else {
        $controllerType = ucfirst($view);
        $controllerClass = "App\\Http\\Controllers\\{$controllerType}Controller";

        if (class_exists($controllerClass)) {
            $controller = new $controllerClass();
        } else {
            throw new Exception("Page doesn't exist - {$view}", 404);
        }

        return $controller->create();
    }
})->where('view', '[A-z_\-]+');

Route::get('/', function () {
    return (new NewsController())->create();
});
