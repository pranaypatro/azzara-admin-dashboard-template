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
    return view('starter-template');
});
Route::get('/404', function () {
    return view('404');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/login2', function () {
    return view('login2');
});
Route::get('/messages', function () {
    return view('messages');
});
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/starter-template', function () {
    return view('starter-template');
});
Route::get('/userprofile', function () {
    return view('userprofile');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/widgets', function () {
    return view('widgets');
});
