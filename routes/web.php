<?php

use App\Http\Controllers\frontend\frontendController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[frontendController::class,'index']);