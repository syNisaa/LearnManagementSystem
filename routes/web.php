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
    return view('index');
});

Route::get('/login', function () {
    return view('admin.login');
});

Route::get('/register', function () {
    return view('admin.register');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/event', function () {
    return view('event');
});

Route::get('/portofolio', function () {
    return view('portofolio');
});

Route::get('/mentor', function () {
    return view('profile');
});


// Route Admin 
Route::get('admin/dashboard', function () {
    return view('admin.dashboard.index');
});

