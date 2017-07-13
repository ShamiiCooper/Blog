<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
    	$posts = Post::orderBy('id','desc')->get();

    	return view('posts.index')->with(['posts'=>$posts]);
    }

    public function create(){

    	return view('posts.create');
    }

    public function store(Request $request){

    	$this->validate($request,[
    		'description'=> 'required'
    		]);

    	$post = Post::create($request->only('description'));

    	return redirect()->route('post_path');
    }

}
