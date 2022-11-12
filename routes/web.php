<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Models\Role;
use App\Models\User;


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


//Home
Route::get('/', function () {
    return view('home');
});




//Dashboard
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

//store Users using Dashboard
Route::post('/usersDashboard', [UserController::class, 'storeDashboard']);


//Log in 
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//Log out
Route::post('/logout', [UserController::class, 'logout']);

//Show all users
Route::get('/dashboard/users', function () {
    return view('dashboard.users.dashboard_users', ['users'=>User::all()]);
})->middleware('auth');

//show add user form
Route::get('/dashboard/users/add', function () {
    return view('dashboard.users.dashboard_users_add', ['roles'=>Role::all()]);
})->middleware('auth');

//show edit user form
Route::get('/dashboard/users/{id}/edit', [UserController::class, 'showEdit'])->middleware('auth');

//edit user
Route::put('/users/{id}', [UserController::class, 'edit'])->middleware('auth');

//delete user
Route::delete('/dashboard/users/{id}', [UserController::class, 'destroy'])->middleware('auth');









//Role

//show add role form
Route::get('/dashboard/roles/add', function () {
    return view('dashboard.roles.dashboard_roles_add');
});

//store role
Route::post('/dashboard/roles', [RoleController::class, 'store']);

//edit role
Route::put('/dashboard/roles/{id}', [RoleController::class, 'update']);

//delete role
Route::delete('/dashboard/roles/{id}', [RoleController::class, 'destroy']);

//show all roles
Route::get('/dashboard/roles', function () {
    return view('dashboard.roles.dashboard_roles', ['roles'=>Role::all()]);
});

//show edit page
Route::get('/dashboard/roles/{id}/edit', function ($id) {
    return view('dashboard.roles.dashboard_roles_edit', ['role'=>Role::find($id)]);
});



