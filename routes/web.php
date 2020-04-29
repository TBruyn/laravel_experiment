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
    return view('welcome');
});

Route::get('/pizzas', function () {
    // retrieve data from db

    $pizzas = [
        ['type' => 'Hawaiian', 'base' => 'Cheesy crust', 'price' => 10],
        ['type' => 'Veggie', 'base' => 'Regular crust', 'price' => 10],
        ['type' => 'Volcano', 'base' => 'Garlic crust', 'price' => 10]
    ];

    return view('pizzas', [
        'pizzas' => $pizzas, 
        'name' => request('name'),
        'age' => request('age')
        ]);
});

Route::get('/pizzas/{id}', function ($id) {

    return view('details', ['id' => $id]);
});