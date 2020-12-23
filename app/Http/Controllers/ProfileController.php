<?php

namespace App\Http\Controllers;
//namespace App\Models;
//use App\Http\Controllers;

use App\Models\User;
use Auth;
use File;
use Image;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
   function profile()
    {
    	return view('profile',array('user'=>Auth::User()));
    }
    public function update_avatar(Request $request)
    {
    	$user= User:: find (Auth:: user()->id);
    	//handle the user upload of avatar
    	if($request->hasfile('avatar'))
    	{
    		$avatar     = $request-> file ('avatar');
    		$filename   = time(). '.' .$avatar->getClientOriginalExtension();

    		//for automatic deleting the exsiting profile image
    		if($user->avatar!=='default.jpg')
    		{
    			$file   = 'upload/avatar/'.$user->avatar;
    			if(file :: exists($file))
    			{
    				unlink($file);
    			}
    		}
    		$target        = public_path('/upload/avatar/'.$filename);
    		Image :: make($avatar)->fit(200,200)->save($target);
    		$user          = Auth::user();
			$user->avatar  = $filename;
    		$user->save();

    	}
    	return view('profile',array('user'=>Auth::user()));
    }
}
