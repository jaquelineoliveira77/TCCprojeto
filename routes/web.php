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

//Rota psicologa
Route::get('psicologa', "App\Http\Controllers\PsicologaController@index")->name("psicologa.index");
Route::get('psicologa/create', "App\Http\Controllers\PsicologaController@create")->name("psicologa.create");
Route::post('psicologa', "App\Http\Controllers\PsicologaController@store")->name("psicologa.store");
Route::get('psicologa/show', "App\Http\Controllers\PsicologaController@show")->name("psicologa.show");

Route::get('psicologa/agendDia', "App\Http\Controllers\PsicologaAgendDiaController@agendDia")->name("psicologa.agendDia");
Route::get('psicologa/histor', "App\Http\Controllers\PsicologaHistorController@histor")->name("psicologa.histor");


//rotas para cadastro de servidores     .
Route::get('psicologaCad/create', "App\Http\Controllers\PsicologaCadController@create")->name("psicologaCad.create");
Route::post('psicologaCad', "App\Http\Controllers\PsicologaCadController@store")->name("psicologaCad.store");








//Route::get('psicologa', "App\Http\Controllers\AgendamentosController@index")->name("psicologa.index");


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
