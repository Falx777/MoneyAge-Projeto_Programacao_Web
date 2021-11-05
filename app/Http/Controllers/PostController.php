<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index (){
        return view('sites.create_post');
    }

    public function create(Request $request){
        Post::create([
            'title' => $request->title,
            'text' => $request->text, 
        ]);
        $result = [
            'title' => $request->title,
            'text' => $request->text, 
        ];
        return $result;
    }

    public function list_posts(){
        $posts = Post::all();
        return view('sites.list', compact('posts'));
    }

/*
    public function edit($post, Request $request){
        $id = $request->id;
        $post = Post::where('id', $id)->get();
        return view ('sites.edit', compact ('post'));
    }
*/
    public function show($id, Request $request){
        $id = $request->id;
        //$post = Post::find($id);
        //forma alternativa
        $post = Post::where('id',$id)->get();
        return view ('sites.show', compact('post'));
    }

}
