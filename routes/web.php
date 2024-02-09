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


    return view('home');
});

Route::get('/italian_league', function () {
    $serie_a_teams = [
        'Juventus', 'Inter', 'Milan', 'Napoli', 'Roma', 'Fiorentina', 'Lazio', 'Udinese'
    ];
    return view('italian_league', compact('serie_a_teams'));
});

Route::get('/england_league', function () {
    $premierLeague_teams = [
        'Arsenal', 'Manchester-City', 'Liverpool', 'Tottenham', 'Manchester-Utd', 'Newcastle', 'Chelsea', 'Astonvilla'
    ];
    return view('england_league', compact('premierLeague_teams'));
});
