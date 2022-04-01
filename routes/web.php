<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResepkmrController;
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
Route::get('/tamu', function () {
    return view('tamu');
});


Auth::routes();

//Route untuk Admin
Route::resource('/kamar','KamarController');
Route::resource('/fasilitas','FasilitasController');
Route::resource('/hotel','HotelController');
// Route::resource('/lihat','LihatController');


// Route untuk Resepsionis
Route::resource('/resepkmr', 'ResepkmrController');
Route::get('/resepkmr/{id}', 'ResepkmrController@cetak');
// Route::resource('/resepkmr', 'ResepkmrController');
Route::resource('/cekin', 'CekinController');
Route::post('/cekin/filter', 'CekinController@filter')->name('cekinfilter');
Route::post('/cekin/search', 'CekinController@search')->name('cekinsearch');

// Route untuk Tamu
Route::resource('/tamkar', 'TamkarController');
Route::resource('/tamfas', 'TamfasController');
Route::resource('/tamhol', 'TamholController');



// Route::get('/search', 'KamarController@search');
Route::get('/search', 'FasilitasController@search');
// Route::get('/search', 'ResepkmrController@search');
// Route::get('/search', 'CekinController@search');
// Route::get('/search', 'CekinController@filter');


// Route::get('/laporan', 'ResepkmrController@index');
// Route::get('/exportlaporan', 'ResepkmrController@export');

// Route::get('/home', 'HomeController@index')->name('home');
Route::middleware('role:admin')->get('/dashboard', function(){
    return view('index');
})->name('dashboard');

Route::middleware('role:resepsionis')->get('/home', function(){
    return view('home');
})->name('home');