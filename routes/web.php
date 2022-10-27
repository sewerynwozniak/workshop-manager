<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Models\Role;


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
    return view('home');
});





Route::get('/dashboard', function () {
    return view('dashboard.dashboard_main');
})->middleware('auth');




//User

Route::get('/login', function () {
    return view('logPage');
})->name('login');

Route::get('/register', [UserController::class, 'create']);


//store Users
Route::post('/users', [UserController::class, 'store']);


//Log in 
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//Log out
Route::post('/logout', [UserController::class, 'logout']);




//Role

Route::get('/dashboard/roles/add', function () {
    return view('dashboard.dashboard_roles_add');
})->middleware('auth');

//store role
Route::post('/dashboard/roles', [RoleController::class, 'store']);

//edit role
Route::put('/dashboard/roles/{id}', [RoleController::class, 'update'])->middleware('auth');

//show all roles
Route::get('/dashboard/roles', function () {
    return view('dashboard.dashboard_roles', ['roles'=>Role::all()]);
})->middleware('auth');

//show edit page
Route::get('/dashboard/roles/{id}/edit', function ($id) {
    return view('dashboard.dashboard_edit', ['role'=>Role::find($id)]);
})->middleware('auth');



