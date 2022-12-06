<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function store(Request $request){
       
        $formFields = $request->validate([
            'title'=>'required',
            'text'=>'required',
        ]);

        Post::create($formFields);

        return redirect('/dashboard/posts')->with('message', 'Post created');
    }


    public function update(Request $request){

        $role = Post::find($request->route('id'));
        $role->title = $request->title;
        $role->text = $request->text;
        $role->save();
        return redirect('/dashboard/posts/')->with('message', 'Post updated');
        
    }
    


}
