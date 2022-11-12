<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
  

    

    public function update(Request $request){

        $role = Role::find($request->route('id'));
        $role->name = $request->name;
        $role->save();
        return redirect('/dashboard/roles/')->with('message', 'Role name updated');
    }


    public function store(Request $request){
       
        $formFields = $request->validate([
            'name'=>'required',
        ]);


        $role = Role::create($formFields);

        return redirect('/dashboard/roles')->with('message', 'Role created');
    }


    public function destroy(Request $request){

        $role = Role::find($request->route('id'));
        $role->delete();
        return redirect('/dashboard/roles/')->with('message', 'Role has been deleted');
    }


}
