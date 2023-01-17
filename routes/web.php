<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\Admin\CursoController;

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

Route::get('/admin/cursos', [App\Http\Controllers\Admin\CursoController::class, 'index'])->name('admin.cursos');
//nesta URL vamos listar todos os cursos.  o que eu colocar no "name" é o Apelido dele.

Route::get('/admin/cursos/adicionar', [App\Http\Controlllers\CursoController::class, 'adicionar'])->name('admin.cursos.adicionar');

Route::post('/admin/cursos/salvar', [App\Http\Controlllers\CursoController::class, 'salvar'])->name('admin.cursos.salvar');

Route::get('/admin/cursos/editar/{id}', [App\Http\Controlllers\CursoController::class, 'editar'])->name('admin.cursos.editar');

Route::put('/admin/cursos/atualizar/{id}', [App\Http\Controlllers\CursoController::class, 'atualizar'])->name('admin.cursos.atualizar');

Route::get('/admin/cursos/deletar/{id}', [App\Http\Controlllers\CursoController::class, 'deletar'])->name('admin.cursos.deletar');









