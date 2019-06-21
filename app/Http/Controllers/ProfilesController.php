<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    //
    public function view(User $user) {
    	
    	return view('profiles.view', [
    		"user" => $user
    	]);
    }
}
