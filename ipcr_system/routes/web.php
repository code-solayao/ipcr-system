<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IpcrController;
use Illuminate\Support\Facades\Route;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::middleware('guest')->controller(AuthController::class)->group(function () {
    Route::get('/login', 'view_login')->name('view.login');
    Route::get('/signup', 'view_signup')->name('view.signup');
    Route::post('/login', 'login')->name('login');
    Route::post('/signup', 'signup')->name('signup');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::controller(IpcrController::class)->group(function() {
    Route::get('/', 'index')->name('index');
});

Route::middleware('auth')->controller(IpcrController::class)->group(function() {
    Route::get('/po-table', 'view_po_table')->name('view.po_table');
    Route::get('/ipcr-sheet', 'view_sheet')->name('view.sheet');
    Route::post('/po-table/create-task', 'create')->name('create.task');
    Route::post('/po-table/select-tasks', 'select_tasks')->name('select.tasks');
    Route::put('/ipcr-sheet/{task}', 'update')->name('update.task');
    Route::delete('/ipcr-sheet/{task}', 'destroy')->name('delete.task');
});
