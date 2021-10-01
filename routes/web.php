<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
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
Route::get('login', [CustomAuthController::class, 'login']);
Route::get('registration', [CustomAuthController::class, 'registration']);
Route::post('register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');
Route::post('registeredrole', [CustomAuthController::class, 'registeredrole'])->name('registeredrole');

Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('role', [CustomAuthController::class, 'role']);
Route::get('logout', [CustomAuthController::class, 'logout']);
Route::get('show/{id}', [CustomAuthController::class, 'show']);
Route::get('edit-user/{id}', [CustomAuthController::class, 'update']);

Route::get('destroy/{id}', [CustomAuthController::class, 'destroy']);
Route::get('delete/{id}', [CustomAuthController::class, 'delrole']);
Route::put('/user-updated/{id}', [CustomAuthController::class, 'userupdated']);
Route::get('/createnewrole', [CustomAuthController::class, 'createnewrole']);
