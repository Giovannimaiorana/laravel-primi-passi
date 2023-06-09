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
    $welcome_message = "Benvenuto in Laravel";
    $data = [
        'welcome_message' => $welcome_message,
        'compatibility' =>[
            'php',
            'Vue',
            'boostrap',
        ]
    ];
    return view('home', $data);
})-> name('home');
