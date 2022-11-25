<?php

use App\Http\Controllers\MatakuliahController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/matkul', [MatakuliahController::class,'index']);
