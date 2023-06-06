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

//Route::get('/', function () {
//    return view('welcome');
//});




 Route::get('/', [ContatoController::class, 'index'])->name('index');

Route::get('/contatos', [ContatoController::class, 'indexcontatos'])->name('contatos');

Route::post('/contatos/create/store', [ContatoController::class, 'store'])->name('contatos.store');

Route::middleware('auth')->group(function () {
Route::get('/contatos/create', [ContatoController::class, 'create'])->name('contatos.create');




Route::put('/contatos/create/{id}', [ContatoController::class, 'update'])->name('contatos.update');

Route::get('/contatos/{id}', [ContatoController::class, 'edit'])->name('contatos.edit');

Route::delete('/contatos/delete/{id}', [ContatoController::class, 'destroy'])->name('contatos.delete');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




