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

}
