<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pertemuan6Controller;

Route::resource('/crud', Pertemuan6Controller::class);
Route::get('/', function () {
    return view('welcome');
});
