<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function create()
    {
    	return view('posts.create');
    }

    public function store(Request $request)
    {
    	//dd($request->all());
    	$request->validate([
    		"caption" => "required",
    		"image" => ["image", "required"]
    	]);

    	$path = $request->image->store('uploads/posts');

    	auth()->user()->posts()->create([
    		"caption" => $request->caption,
    		"image" => $path
    	]);

    	return redirect()->route("home");

    }
}
