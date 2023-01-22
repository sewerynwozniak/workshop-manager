<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop; 
use App\Models\User; 
use Illuminate\Support\Facades\Auth;
use DB;

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

    public function claimReward(Request $request){
     
                
         $userId = Auth::user()->id;
         $user = User::find($userId);
         $workshopId = $request->id;  
         $workshopXp = Workshop::find($workshopId)->xp;

        //update user xp
         $user->xp = $user->xp+$workshopXp;
         $user->save();

        //update workshop__user
        $row = DB::table('user_workshop')
            ->where('workshop_id', (int)$workshopId )
            ->where('user_id', $userId)
            ->value('claimed');

            
            if(!$row){
            DB::table('user_workshop')
            ->where('workshop_id', $workshopId )
            ->where('user_id', $userId)
            ->update(['claimed' => 1]);
            }

        return redirect('/dashboard/workshops/')->with('message', 'Reward claimed');
    }



}
