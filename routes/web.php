<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

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


Route::get('/contato', [ContatoController::class, 'index']);

Route::get('/contato/bla', [ContatoController::class, 'bla']);


// Route::post('/teste', function() {
//     return "Contato POST ";
// }); 

Route::post('/teste', [ContatoController::class, 'store'])->name('form.store');

// Route::post('/contato', function() {
//     return "Contato PUT ";
// }); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
