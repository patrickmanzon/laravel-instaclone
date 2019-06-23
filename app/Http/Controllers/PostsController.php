<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Post;


class PostsController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth');
    } 

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

    	$path = $request->image->store('uploads/posts', 'public');
        //dd(public_path('storage/'.$path));
        $image = Image::make(public_path('storage/'.$path))->fit(1200 ,1200);
        $image->save();

    	auth()->user()->posts()->create([
    		"caption" => $request->caption,
    		"image" => $path
    	]);

    	return redirect()->route("home");

    }

    public function view(Post $post){
        
        return view('posts.view', compact('post'));

    }

}
