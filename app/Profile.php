<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    
	protected $guarded = []; 

	public function profileImage()
	{
		$imagePath = ($this->image) ? $this->image: 'profile/Q4dM2ctqqHOrkRRjlGtvAUM4tmmhlzpmQTEsD0Uu.jpeg';

		return '/storage/'.$imagePath; 
	}

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
