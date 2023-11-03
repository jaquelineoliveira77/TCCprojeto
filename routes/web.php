<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;

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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/aluno', [AlunoController::class, 'index'])->name('aluno.index');

Route::get('aluno', "App\Http\Controllers\AlunoController@index")->name("aluno.index");
Route::get('aluno/create', "App\Http\Controllers\AlunoController@create")->name("aluno.create");
Route::post('aluno', "App\Http\Controllers\AlunoController@store")->name("aluno.store");
Route::get('aluno/show', "App\Http\Controllers\AlunoController@show")->name("aluno.show");

Route::get('aluno/histor', "App\Http\Controllers\AlunoHistorController@histor")->name("aluno.histor");


//rotas para cadastro de aluno
Route::get('alunoCad/create', "App\Http\Controllers\AlunoCadController@create")->name("alunoCad.create");
Route::post('alunoCad', "App\Http\Controllers\AlunoCadController@store")->name("alunoCad.store");

//rotas para cadastro de servidores     .
Route::get('psicologaCad/create', "App\Http\Controllers\PsicologaCadController@create")->name("psicologaCad.create");
Route::post('psicologaCad', "App\Http\Controllers\PsicologaCadController@store")->name("psicologaCad.store");
Route::get('psicologaCad/show', "App\Http\Controllers\PsicologaCadController@show")->name("psicologaCad.show");

//Rota psicologa
Route::get('psicologa', "App\Http\Controllers\PsicologaController@index")->name("psicologa.index");
Route::get('psicologa/create', "App\Http\Controllers\PsicologaController@create")->name("psicologa.create");
Route::post('psicologa', "App\Http\Controllers\PsicologaController@store")->name("psicologa.store");
Route::get('psicologa/show', "App\Http\Controllers\PsicologaController@show")->name("psicologa.show");

// Rota para a página de confirmação
Route::get('psicologa/agendDia', "App\Http\Controllers\PsicologaAgendDiaController@agendDia")->name("psicologa.agendDia");
// Route::get('psicologa/show', "App\Http\Controllers\PsicologaAgendDiaController@agendamentoConcluido")->name("psicologa.show");
// Route::get('psicologa/agendDia', "App\Http\Controllers\PsicologaAgendDiaController@confirmacao")->name("psicologa.agendDia");

//rotas para cadastro e visualização dos atendimentos realizados
Route::get('psicologaCadAtd/create', "App\Http\Controllers\PsicologaCadAtdController@create")->name("psicologaCadAtd.create");
Route::post('psicologaCadAtd', "App\Http\Controllers\PsicologaCadAtdController@store")->name("psicologaCadAtd.store");
Route::get('psicologaCadAtd/show', "App\Http\Controllers\PsicologaCadAtdController@show")->name("psicologaCadAtd.show");
Route::post('psicologa/confirmarSolicitacao/{id}', "App\Http\Controllers\PsicologaController@confirmarSolicitacao")->name("psicologa.confirmarSolicitacao");


Route::get('providencia/create', "App\Http\Controllers\ProvidenciaController@create")->name("providencia.create");
Route::post('providencia/store', "App\Http\Controllers\ProvidenciaController@store")->name("providencia.store");
Route::get('providencia/show', "App\Http\Controllers\ProvidenciaController@show")->name("providencia.show");

Route::get('motivo/create', "App\Http\Controllers\MotivoController@create")->name("motivo.create");
Route::post('motivo/store', "App\Http\Controllers\MotivoController@store")->name("motivo.store");
Route::get('motivo/show', "App\Http\Controllers\MotivoController@show")->name("motivo.show");







Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/user/logout', 'App\Http\Controllers\Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function () {
    // Dashboard route
    Route::get('/', 'App\Http\Controllers\AdminController@index')->name('admin.dashboard');

    // Login routes
    Route::get('/login', 'App\Http\Controllers\Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'App\Http\Controllers\Auth\AdminLoginController@login')->name('admin.login.submit');

    // Logout route
    Route::post('/logout', 'App\Http\Controllers\Auth\AdminLoginController@logout')->name('admin.logout');

    // Register routes
    // Route::get('/register', 'App\Http\Controllers\Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
    // Route::post('/register', 'App\Http\Controllers\Auth\AdminRegisterController@register')->name('admin.register.submit');

    // Password reset routes
    Route::get('/password/reset', 'App\Http\Controllers\Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'App\Http\Controllers\Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'App\Http\Controllers\Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'App\Http\Controllers\Auth\AdminResetPasswordController@reset')->name('admin.password.update');
});
