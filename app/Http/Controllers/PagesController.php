<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

use App\Http\Requests\EditProfileRequest;

class PagesController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}
		
	public function dashboard() 
	{
		//dd(\Auth::user());
		return view('dashboard');
	}
	
	public function profile()
	{
		return view('profile');
	}
	public function settings()
	{
		$user = \Auth::user();
		return view('settings', compact('user'));
	}
	
	public function mylogout()
	{
		\Auth::logout();
				
		return redirect('/home');
	}
	
	public function updateSettings()
	{
		$input = Request::all();
		$user = \Auth::user();
		
		$user->emailMessages = $input['emailMessages'];
		$user->emailAlerts = $input['emailAlerts'];
		
		$user->save();
		
		return redirect('settings')->with([
			'flash_message' => 'Saved', 
			//'flash_message_important' => true, 
			'flash_alert_class' => 'alert-success'
		]);
	}
	
	public function editProfile()
	{
		$user = \Auth::user();
		return view('editProfile', compact('user'));
	}
	
	public function updateProfile(EditProfileRequest $request)
	{
		$input = Request::all();
		//dd($input['firstName']);
		$user = \Auth::user();
		if($input['birthDate'] == ''){
			$input['birthDate'] = '0000-00-00';
		}
		$user->update($input);
		
		return redirect('profile')->with([
			'flash_message' => 'Saved', 
			'flash_alert_class' => 'alert-success'
		]);
	}
}
