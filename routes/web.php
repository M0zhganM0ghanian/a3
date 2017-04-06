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

Route::get('/', 'WelcomeController@index');

Route::get('/generate', 'GetPasswordController@index');
Route::post('/generate', 'PostPasswordController@index');

Route::get('/help', 'PracticeController@info');
Route::get('/random', 'PracticeController@random');

Route::get('/strong', 'PracticeController@strong');
Route::get('/safe', 'PracticeController@safe');

if (config('app.env') == 'local') {
  Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}
