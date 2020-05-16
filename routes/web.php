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

// Главная
Route::get('/', function () {
    return view('welcome');
});
// Отображение заявки
Route::get('/event1', function () {
    return view('event1');
});
Route::get('/event2', function () {
    return view('event2');
});
Route::get('/application-created', function () {
    return view('application_create_suc');
});
// Добавление заявки
Route::post('/application', 'ApplicationController@store');
// Получение положения по событию
Route::get('/event/specification/{eventId}', 'EventController@index');

Auth::routes();

// Админка. Главная
Route::get('/home', 'HomeController@index')->name('home');
// Админка. Список событий для получения по ним заявок
Route::get('/home/events', function () {
    return view('home_events');
})->middleware('auth');
// Получение заявок по событиям (конкурсам)
Route::get('/application/{eventId}', 'ApplicationController@index')->middleware('auth');
