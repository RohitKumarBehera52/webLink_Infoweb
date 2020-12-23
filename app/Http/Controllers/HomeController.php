<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
     $userId = Auth::id();
    session(['userSession' => $userId]);
    //echo  session('userSession');exit();
     $data = DB::table('users')->where('id','=',$userId)->pluck('tinUsertype');
   
     if($data[0]==1)
     {
        //echo "SuperAdmin";exit();
        return view('homeAdmin');
     }
     else
     {
        return view('home');
     }
    
           
      }
      function profile()
      {
        echo "string";exit();
      }
        
      
    
}
