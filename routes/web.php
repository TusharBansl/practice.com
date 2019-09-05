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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/motorcontroller', function(){ return view('motorcontroller'); })->name('motorcontroller');
Route::get('/bms',     function(){ return view('bms');     })->name('bms');
Route::get('/ivec',     function(){ return view('ivec');     })->name('ivec');
Route::get('/services',     function(){ return view('services');     })->name('services');
Route::get('/team',     function(){ return view('team');     })->name('team');
Route::get('/associates',    function(){ return view('associates');    })->name('associates');
Route::get('/contact_us',    function(){ return view('contact');    })->name('contact');
