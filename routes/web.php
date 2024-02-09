<?php

use Illuminate\Support\Facades\Route;

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
    $serie_a_teams = [
        'Juventus', 'Inter', 'Milan', 'Napoli', 'Roma', 'Fiorentina', 'Lazio', 'Udinese'
    ];

    return view('home', compact('serie_a_teams'));
});
