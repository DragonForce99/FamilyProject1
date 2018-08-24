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
    return view('Pages/Profile');
});

Route::get('/v1', function () {
    return view('Pages/Profile');
});

Route::get('/v2', function () {
    return view('Pages/CreateMember');
});


Route::post('/SubmitMember', 'MemberController@store');

