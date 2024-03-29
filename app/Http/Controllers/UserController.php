<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User; 
use App\Models\Role;
use App\Models\League;
use Illuminate\Support\Facades\Auth;
use DB;



class UserController extends Controller
{
    

    public function create(){
        return view('regPage');
    }

    public function store(Request $request){

        $formFields = $request->validate([
            'name'=>'required',
            'email'=>['required', 'email', Rule::unique('users', 'email')],
            'password'=>['required', 'confirmed']
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/')->with('message', 'User created');
    }



    public function storeDashboard(Request $request){

        $formFields = $request->validate([
            'name'=>'required',
            'email'=>['required', 'email', Rule::unique('users', 'email')],
            'role_id'=>'required',
            'password'=>['required', 'confirmed'],
            'password_confirmation'=>'required'
        ]);

      
        $formFields['role_id'] = intval($formFields['role_id']);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        return redirect('/dashboard/users')->with('message', 'User created');
    }


    public function authenticate(Request $request){

      

        $credentials = $request->validate([
            'email'=>'required',
            'password'=>'required' 
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();            
            return redirect('/');
        }      
    }




    public function logout(Request $request){
        Auth::logout();    
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }


    public function destroy(Request $request){

        $user = User::find($request->route('id'));
        $user->delete();
        return redirect('/dashboard/users/')->with('message', 'User has been deleted');
    }



    public function showEdit(Request $request){
        $user = User::find($request->route('id'));   
        return view('dashboard.users.dashboard_users_edit', ['user'=>$user, 'roles'=>Role::all()]);
    }
    

    public function edit(Request $request){

        $user = User::find($request->route('id'));
     
        $formFields = $request->validate([
            'name'=>'required',
            'email'=>['required', 'email'],
            'role_id'=>'required',
        ]);
    
        $formFields['role_id'] = intval($formFields['role_id']);

        $user->update($formFields);

        return redirect('/dashboard/users')->with('message', 'User updated');
    }


    public function updateAvatar(Request $request){


        if($request->hasFile('avatar')){
            $filename = $request->avatar->getClientOriginalName();
            $request->avatar->storeAs('avatar',$filename,'public');
            Auth()->user()->update(['avatar'=>$filename]);
        }


        return redirect('/dashboard/settings')->with('message', 'Avatar updated');
    }



    public function assignLeague(){


        $user = Auth::user();
        $xp = Auth::user()->xp;

        if ($xp<200){
            $user->league_id = 1;
            $user->save();
        }elseif ($xp>=250 &&  $xp<500){
            $user->league_id = 2;
            $user->save();
        }elseif ($xp>=500 &&  $xp<750){
            $user->league_id = 3;
            $user->save();
        }elseif ($xp>=750 &&  $xp<1000){
            $user->league_id = 4;
            $user->save();
        }else{
            $user->league_id = 5;
            $user->save();
        };
           
 

    }







}



