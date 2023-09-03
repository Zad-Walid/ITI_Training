<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    function index(){
        $posts = Post::all();
        return $posts ;
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
        $post->user_id= $request->user_id;
        $post->save();

    }

    function show($id){

        $post = Post::find($id);

        return $post;
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
        
    }


    function destroy ($id){
        Post::destroy($id);
        return "deleted !!";
        
    }
}


