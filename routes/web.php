<?php

use App\Http\Controllers\ControllerStudent;
use Illuminate\Support\Facades\Route;


Route::get('/', [ControllerStudent::class, 'index']);
