<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CadastroController;

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
Route::get('/',function(){return redirect()->route('login');});

Route::get('/login', [LoginController::Class, 'index'])->name("login");

Route::post('/login', [LoginController::Class, 'validarLogin'])->name('login-validar');

Route::get('/login/cadastrado', [LoginController::Class, 'index_cadastro'])->name("cadastro-bem-sucedido");

Route::get('/welcome',[WelcomeController::Class, 'index'])->name("welcome");

Route::get('/cadastro',[CadastroController::Class, 'index'])->name("cadastro");

Route::post('/cadastro',[CadastroController::Class, 'cadastrarUsuario']);

