<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\PhotoController;
Route::get('/', function () {
    return view('welcome');
});
Route::prefix('photos')->controller(PhotoController::class)->group(function(){
    Route::view('/add','photo');
    Route::post('insert','create');
});
