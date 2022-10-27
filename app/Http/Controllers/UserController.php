<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User; 
use Illuminate\Support\Facades\Auth;

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

}
