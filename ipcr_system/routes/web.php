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
    Route::post('/po-table/create-task', 'create')->name('create.task');
    Route::post('/po-table/collect-tasks', 'collect_tasks')->name('collect.tasks');
    Route::put('/ipcr-sheet/{task}', 'update')->name('update.task');
    Route::delete('/ipcr-sheet/{task}', 'destroy')->name('delete.task');
});
