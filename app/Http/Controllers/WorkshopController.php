<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop; 
use App\Models\User; 

class WorkshopController extends Controller
{
   
    public function store(Request $request){

       
        $formFields = $request->validate([
            'date'=>'required',
            'time'=>'required',
            'place'=>'required',
        ]);

        $formFields['description'] = $request->description;

       $workshop = Workshop::create($formFields);


        $workshop->users()->sync($request->users);
       
         
        return redirect('/dashboard/workshops')->with('message', 'Workshop created');
    }



    public function update(Request $request){

        $workshop = Workshop::find($request->route('id'));
        $formFields = $request->validate([
            'date'=>'required',
            'time'=>'required',
            'place'=>'required',
        ]);

        $formFields['description'] = $request->description;

       $workshop->update($formFields);
       
        $workshop->users()->sync($request->users);

        return redirect('/dashboard/workshops')->with('message', 'Workshop updated');
    }


    public function destroy(Request $request){
        $workshop = Workshop::find($request->route('id'));
        $workshop->delete();
        return redirect('/dashboard/workshops/')->with('message', 'Workshop has been deleted');
    }



}
