<?php

use App\Http\Controllers\IpcrController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(IpcrController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/po-table', 'view_po_table')->name('view.po_table');
    Route::get('/ipcr-sheet', 'view_sheet')->name('view.sheet');
});

Route::controller(IpcrController::class)->group(function() {
    Route::post('/submit-tasks', 'submit_tasks')->name('submit.tasks');
});

Route::post('/tasks', [IpcrController::class, 'store']);
Route::put('/tasks/{task}', [IpcrController::class, 'update']);
Route::delete('/tasks/{task}', [IpcrController::class, 'destroy']);
