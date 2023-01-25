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
use App\Models\League;


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
    
    return view('dashboard.dashboard_main', 
    [
        'upcomingUserWorkshop'=>User::find(Auth::user()->id)->workshops()->where('date', '>=', date("Y-m-d"))->orderBy('date', 'ASC')->first(),
        'latestPost'=>Post::all()->last()
    ]);
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

    //delete post
    Route::delete('/dashboard/posts/{id}', [PostController::class, 'destroy']);



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


    //delete workshop
    Route::delete('/dashboard/workshops/{id}', [WorkshopController::class, 'destroy']);


    //claim reward for workshop
    Route::get('/dashboard/workshops/{id}/claimReward', [WorkshopController::class, 'claimReward']);




        //Assignment

      //show add assignment form
      Route::get('/dashboard/assignments/add', function () {
        return view('dashboard.assignments.dashboard_assignments_add', ['assignments'=>Assignment::all(), 'users'=>User::all()]);
    });


     //store assignment
     Route::post('/dashboard/assignments', [assignmentController::class, 'store']);


     //show edit page
    Route::get('/dashboard/assignments/{id}/edit', function ($id) {
        return view('dashboard.assignments.dashboard_assignments_edit', ['assignment'=>Assignment::find($id), 'users'=>User::all()]);
    });

    //edit assignment
    Route::put('/dashboard/assignments/{id}', [AssignmentController::class, 'update']);


    //delete assignment
    Route::delete('/dashboard/assignments/{id}', [AssignmentController::class, 'destroy']);


    //claim reward for assignment
    Route::get('/dashboard/assignments/{id}/claimReward', [AssignmentController::class, 'claimReward']);

 
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
        return view('dashboard.workshops.dashboard_workshops', 
        [
            'upcomingAllWorkshops'=>Workshop::where('date', '>=', date("Y-m-d"))->orderBy('date', 'DESC')->get(),
            'pastAllWorkshops'=>Workshop::where('date', '<', date("Y-m-d"))->orderBy('date', 'DESC')->get(),
            'upcomingUserWorkshops'=>User::find(Auth::user()->id)->workshops()->where('date', '>=', date("Y-m-d"))->orderBy('date', 'DESC')->get(),
            'pastUserWorkshops'=>User::find(Auth::user()->id)->workshops()->where('date', '<', date("Y-m-d"))->orderBy('date', 'DESC')->get()
        ]);

    });


 
    //show single workshop
    Route::get('/dashboard/workshops/{id}', function ($id) {
        return view('dashboard.workshops.dashboard_workshop', ['workshop'=>Workshop::find($id)]);
    });



    //Settings

     //Show settings view
     Route::get('/dashboard/settings', function () {
        return view('dashboard.settings.dashboard_settings');
    });


    //update settings
    Route::put('/dashboard/settings/{id}', [UserController::class, 'updateAvatar']);




    //Profile

     //Show profile view
     Route::get('/dashboard/profile', function () {
        return view('dashboard.profile.dashboard_profile', [
            'xp'=>User::find(Auth::user()->id)->xp,
            'league'=>League::find(Auth::user()->league_id)
        
        ]);
    });




