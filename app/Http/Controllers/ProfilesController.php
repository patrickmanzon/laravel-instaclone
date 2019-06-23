<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use Image;
use Storage;

class ProfilesController extends Controller
{
    //
    public function view(User $user) {
    	
    	return view('profiles.view', [
    		"user" => $user
    	]);
    }

    public function edit(User $user)
    {   

        $profile = $user->profile;
        $this->authorize('update', $profile);
        return view('profiles.edit', compact('profile'));
    }

    public function update(User $user, Request $request)
    {
        $this->authorize('update', $user->profile);
        $data = $request->validate([
            "title" => "required",
            "description" => "required",
            "url" => ["required", "url"],
            "image" => "",
        ]);

        if($request->image){

            if($user->profile->image){
                echo $user->profile->image;
                var_dump(Storage::disk('public')->delete($user->profile->image));
            }

            $path = $request->image->store('uploads/profile', 'public');
            $image = Image::make(public_path('storage/'.$path))->fit(1200 ,1200);
            $image->save();
            $imagePath = ["image" => $path];
        }

        auth()->user()->profile()->update(array_merge(
            $data,
            $imagePath ?? []
        ));

        //return redirect('profile/'.$user->id);
    }
}
