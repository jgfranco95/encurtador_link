<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal']);

Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato']);

Route::get('/sobre-nos', [App\Http\Controllers\SobreNosController::class, 'sobreNos']);

Route::get('/', 'IndexController@index')->name('site.index');
Route::get('/redirect', 'IndexController@redirect')->name('site.redirect');
Route::get('/register', 'AccountController@registerForm')->name('site.register');
Route::post('/register', 'AccountController@register')->name('account.register');
Route::get('/recover', 'AccountController@recoverForm')->name('site.recover');
Route::post('/recover', 'AccountController@recover')->name('account.recover');
Route::get('/login', 'AccountController@loginForm')->name('site.login');
Route::post('/login', 'AccountController@login')->name('account.login');
Route::get('/logout', 'AccountController@logout')->name('account.logout');

Route::group(['prefix' => 'app', 'as' => 'app.'], function () {
    Route::get('/generate', 'LinkController@generateForm')->name('generate');
    Route::post('/generate', 'LinkController@generate')->name('generate.link');
    Route::get('/remove', 'LinkController@removeForm')->name('remove');
    Route::post('/remove', 'LinkController@remove')->name('remove.link');
    Route::get('/list', 'LinkController@list')->name('list');
});