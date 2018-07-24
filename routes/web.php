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
// top page
Route::get('/', function () {
    return view('welcome');
});

// signup page
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('signedup', function () {
    return view('auth.login');
});
// Login authentication
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::get('hotcold', function () {
    return view('layouts.feel');
});

// feel submit page
Route::get('manipulation', function () {
    return view('manipulation');
})->name('manipulation.get');

Route::get('submit', 'Auth\SubmitController@showSubmitForm')->name('submit.get');
Route::post('submit', 'Auth\SubmitController@submit')->name('submit.post');

Route::put('hot', 'HotController@update')->name('hot');
Route::put('cold', 'ColdController@update')->name('cold');
Route::put('com', 'ComController@update')->name('com');

Route::get('result', function () {
    return view('result');
})->name('result.get');

Route::get('map', function () {
    return view('map');
})->name('map.get');

Route::get('feel', function () {
    return view('layouts.feel');
})->name('feel.get');

Route::get('red', function () {
    return view('teammaps.red');})->name('red.get');
Route::get('yellow', function () {
    return view('teammaps.yellow');})->name('yellow.get');
Route::get('pink', function () {
    return view('teammaps.pink');})->name('pink.get');
Route::get('purple', function () {
    return view('teammaps.purple');})->name('purple.get');
    
Route::put('clear1a', 'ClearController@a1')->name('clear1a');
Route::put('clear1b', 'ClearController@b1')->name('clear1b');
Route::put('clear2a', 'ClearController@a2')->name('clear2a');
Route::put('clear2b', 'ClearController@b2')->name('clear2b');
Route::put('clear2c', 'ClearController@c2')->name('clear2c');
Route::put('clear2d', 'ClearController@d2')->name('clear2d');
Route::put('clear3a', 'ClearController@a3')->name('clear3a');
Route::put('clear3b', 'ClearController@b3')->name('clear3b');
Route::put('clear4a', 'ClearController@a4')->name('clear4a');
Route::put('clear4b', 'ClearController@b4')->name('clear4b');
Route::put('clear4c', 'ClearController@c4')->name('clear4c');
Route::put('clear4d', 'ClearController@d4')->name('clear4d');


Route::get('mypage', function () {
    return view('mypage');})->name('mypage.get');

Route::get('introduction', function () {
    return view('introduction');
})->name('introduction.get');

