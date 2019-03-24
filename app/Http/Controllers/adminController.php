<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class adminController extends Controller
{   
public function index()
    {
        return view('/welcome');
    }

    /*public function admin_login()
    {
        return view
    }*/
	/*public function admin_check()
	{
		$admin_id=Session::get('admin_id');
		if ($admin_id) {
			return ;
		}
		else{
			return Redirect::to('/')->send();
		}
	}

	public function index()
	{
		return view('/welcome');
	}

 	public function dashboard()
  	{
  		$this->admin_check();
   		return view('admin.dashboard');
    }

    public function admin_login()
    {
    	return view('admin.admin_login');
    }

    public function admin_login_process(Request $request)
    {
    	$email=$request->email;
    	$password=md5($request->password);
	    $result=DB::table('admin')
	    	->where('admin_email', $email)
	    	->where('admin_password', $password)
	    	->first();
    	
	    if ($result) {
	    	Session::put('admin_id', $result->admin_id);
            Session::put('admin_name', $result->admin_name);
	    	return Redirect::to('/dashboard');
	    }
    	
    	else{
    		Session::put('adlmsgf', 'Wrong input email or password...!!!');
    		return Redirect::to('/admin-login');
    	}
    }

    public function admin_logout()
    {
    	Session::flush();
    	return Redirect::to('/');
    }*/

}
