<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WorkshopController;
use App\Models\Role;
use App\Models\User;
use App\Models\Post;
use App\Models\Workshop;


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
    //dd(Auth::user()->id);
    // dd(User::find(1)->workshops);
    return view('dashboard.dashboard_main', ['workshops'=>User::find(Auth::user()->id)->workshops]);
})->middleware('auth');




//Auth

    //Log out
    Route::post('/logout', [UserController::class, 'logout']);

    //Login Page

    Route::get('/login', function () {
        return view('logPage');
    })->name('login');


    //Register Page
    Route::get('/register', [UserController::class, 'create']);


     //Log in 
     Route::post('/users/authenticate', [UserController::class, 'authenticate']);

     //store Users
    Route::post('/users', [UserController::class, 'store']);







Route::middleware(['auth','isAdmin'])->group(function () {


    //store Users using Dashboard
    Route::post('/usersDashboard', [UserController::class, 'storeDashboard']);


    //Show all users
    Route::get('/dashboard/users', function () {
        return view('dashboard.users.dashboard_users', ['users'=>User::all()]);
    });

    //show add user form
    Route::get('/dashboard/users/add', function () {
        return view('dashboard.users.dashboard_users_add', ['roles'=>Role::all()]);
    });

    //show edit user form
    Route::get('/dashboard/users/{id}/edit', [UserController::class, 'showEdit']);

    //edit user
    Route::put('/users/{id}', [UserController::class, 'edit']);

    //delete user
    Route::delete('/dashboard/users/{id}', [UserController::class, 'destroy']);




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


    //Posts
      //show add post form
      Route::get('/dashboard/posts/add', function () {
        return view('dashboard.posts.dashboard_posts_add', ['Posts'=>Post::all()]);
    });

    //store post
    Route::post('/dashboard/posts', [PostController::class, 'store']);

    //show edit post
    Route::get('/dashboard/posts/{id}/edit', function ($id) {
        return view('dashboard.posts.dashboard_posts_edit', ['post'=>Post::find($id)]);
    });

    //edit post
    Route::put('/dashboard/posts/{id}', [PostController::class, 'update']);



    //Workshops
      //show add workshop form
      Route::get('/dashboard/workshops/add', function () {
        return view('dashboard.workshops.dashboard_workshops_add', ['Workshops'=>Workshop::all(), 'users'=>User::all()]);
    });


     //store workshop
     Route::post('/dashboard/workshops', [WorkshopController::class, 'store']);


     //show edit page
    Route::get('/dashboard/workshops/{id}/edit', function ($id) {
        return view('dashboard.workshops.dashboard_workshops_edit', ['workshop'=>Workshop::find($id), 'users'=>User::all()]);
    });

    //edit workshop
    Route::put('/dashboard/workshops/{id}', [WorkshopController::class, 'update']);

 
});



    //Posts

     //Show all posts
     Route::get('/dashboard/posts', function () {
        return view('dashboard.posts.dashboard_posts', ['posts'=>Post::all()]);
    });

    //show single post
    Route::get('/dashboard/posts/{id}', function ($id) {
        return view('dashboard.posts.dashboard_post', ['post'=>Post::find($id)]);
    });


    //Workshops

     //Show all workshops
     Route::get('/dashboard/workshops', function () {
        return view('dashboard.workshops.dashboard_workshops', ['workshops'=>Workshop::orderBy('date', 'desc')->get()]);
    });

    //show single workshops
    Route::get('/dashboard/workshops/{id}', function ($id) {
        return view('dashboard.workshops.dashboard_workshop', ['workshop'=>Workshop::find($id)]);
    });



