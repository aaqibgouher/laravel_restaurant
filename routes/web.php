<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();
Route::middleware(['auth'])->group(function(){
    Route::get("/", "DashboardController@index")->name('home');
    Route::get("/add_order", "OrderController@add")->name('add_order');
    Route::post("/add_order", "OrderController@add");
    Route::get("/report", "ReportController@report")->name('report');   
});

// Route::get('/home', 'HomeController@index')->name('home');
