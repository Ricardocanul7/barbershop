<?php

use Illuminate\Support\Facades\Auth;
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
// Pagina visible para todos los clientes
Route::resource('/', 'LandingController');


//pagina administrativa para dashboard del dueño
Auth::routes();

Route::get('admin', function(){
    return redirect('login');
});

Route::prefix('admin')->group(function(){
    Route::get('home', 'HomeController@index')->name('home');
    Route::resource('clients', 'ClientsController');
    Route::resource('services', 'ServicesController');
});
