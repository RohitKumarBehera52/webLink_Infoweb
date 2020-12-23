<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use App\User;
use Auth;
use File;
use Image;


class ProfileController extends BaseController
{
    function index(Request $request)
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
    	return view('profile',array('user'=>Auth::User()));
    }
}
