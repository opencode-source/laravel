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

Route::get('/orders/pizzas', 'PizzaController@index')->middleware('auth');

Route::get('/pizzas/create', 'PizzaController@create')->name('pizzas.create');

Route::post('/pizzas', 'PizzaController@store');

Route::get('/pizzas/{id}', 'PizzaController@show')->middleware('auth');

Route::delete('/pizzas/{id}', 'PizzaController@destroy')->middleware('auth');


Auth::routes(
    ['register' => false]
);

Route::get('/home', 'HomeController@index')->name('home');


