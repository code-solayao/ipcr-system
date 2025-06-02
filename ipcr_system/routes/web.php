<?php

use App\Http\Controllers\IpcrController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::controller(IpcrController::class)->group(function() {
    Route::post('/post-test', 'select_tasks')->name('post.test');
});
