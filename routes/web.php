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
    // App\Jobs\SendMessage::dispatch('test email');
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Отправка формы
Route::post('/send-form', 'HomeController@sendForm')->name('send.form');

// Меняем статус в списке
Route::get('/manager/set-status/{app}', 'HomeController@setStatus');
// Обновления email менеджера
Route::post('/manager/set-email/{user}', 'HomeController@setEmail')->name('manager.set.email');
// Импорт CSV
Route::get('/import', 'CoreController@index')->name('import.index');
Route::post('/import', 'CoreController@import')->name('import');
