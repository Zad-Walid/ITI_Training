<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    function index(){



        $posts = Post::all();

        return view("posts.posts",compact('posts'));
        
    }


    function show($id){

        $post = Post::find($id);

        return view("posts.show", compact('post'));
    }


    function create(){

        return view ("posts.create");
    }


    function store(Request $request){
        
        $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' =>'required',

        ]);
        
        //store in db
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->created_at = $request->created_at;
        $post->posted_by = $request->posted_by;
        $post->user_id= Auth::id();
        $post->save();

        // Post::create(
        //     ["title" =>$request->title
        //     ]);

        //echo "You added data successfully!!";
        return redirect("/posts");
    }

    function edit($id){

        $post = Post::find($id);

        return view ("posts.edit",compact('post'));
    }


    function update($id , Request $request){


        $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' =>'required',

        ]);

        

        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->created_at = $request->created_at;
        $post->posted_by = $request->posted_by;
        $post->save();

        return redirect("/posts");
        
    }


    function destroy ($id){
        Post::destroy($id);
        return redirect("/posts");
        
    }
}
