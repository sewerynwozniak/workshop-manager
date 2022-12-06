<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop; 
use App\Models\User; 

class WorkshopController extends Controller
{
    //
    public function store(Request $request){

       
        $formFields = $request->validate([
            'date'=>'required',
            'time'=>'required',
            'place'=>'required',
        ]);

        $formFields['description'] = $request->description;

       $workshop = Workshop::create($formFields);

        foreach($request->users as $key=>$val){
            
            $workshop->users()->attach($val);
        }
       
         
    
         

        return redirect('/dashboard/workshops')->with('message', 'Workshop created');
    }
}
