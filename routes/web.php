<?php

use Illuminate\Support\Facades\Route;
use app\Http\controllers\PhotoController;
Route::get('/', function () {
    return view('welcome');
});
Route::prefix('photos')->controller(PhotoController::class)->group(function(){
    Route::view('/add','photo');
});
