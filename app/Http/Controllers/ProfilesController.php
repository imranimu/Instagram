<?php

namespace App\Http\Controllers;

use App\User; 

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index(User $user )
    {
        return view('profiles.index', compact('user'));
    }

    public function edit(User $user )
    {	

    	$this->authorize('update', $user->profile);

    	return view('profiles.edit', compact('user'));    	 
    }


    public function update(User $user){

    	$this->authorize('update', $user->profile);

    	$data = request()->validate([
    		'title' => 'required',
    		'description' => 'required',
    		'url' => 'url',
    		'image' => '',
    	]);

    	if (request('image')) {
    		
    		$imagePath = request('image')->store('profile', 'public');       	 

    		$imageArra = ['image' => $imagePath];
    	}
    	
    	auth()->user()->profile->update(array_merge(
    		$data,
    		$imageArra ?? []	
    	));

    	return redirect("/profile/{$user->id}");

    }

}


