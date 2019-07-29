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


Route::get('/simpson', function () {
    $api = config('app.api_url');

    $response = json_decode(file_get_contents($api . '/categories'), true);

    $categories = $response['results'];

    return view('simpson', ['api' => $api, 'categories' => $categories]);
});


Route::get('/simpson/{id}', function ($id) {
    $api = config('app.api_url');

    $response = json_decode(file_get_contents($api . '/categories/'. $id), true);

    return view('simpson_detail', ['api' => $api, 'category' => $response]);
});
