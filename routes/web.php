<?php

use Illuminate\Support\Facades\Route;

//App Controllers
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //User
    Route::get('/user', [UserController::class, 'index'])->name('user-index');
    //Role
    Route::get('/role', [RoleController::class, 'index'])->name('role-index');
    //Permission
    Route::get('/permission', [permissionController::class, 'index'])->name('permission-index');
});
