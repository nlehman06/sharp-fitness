<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CreateProgramRequest;
use App\Programs;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class ProgramsController extends Controller
{
    public function index()
	{
		if(\Auth::user()->isAdmin()){
			//Admin can see all workouts
			$programs = Programs::orderby('name')->get();
		} else {
			$programs = Programs::orderby('name')->active()->get();
		}
		
		return view('programs.index', compact('programs'));
	}
	
	public function create()
	{
		$users = User::lists('firstName', 'id');
		return view('programs.create', compact('users'));
	}
	
	public function store(CreateProgramRequest $request)
	{
		$program = Programs::create($request->all());
		
		$program->users()->attach($request->input('users'));
		
		return redirect('programs')->with([
			'flash_message' => 'Program Created', 
			//'flash_message_important' => true, 
			'flash_alert_class' => 'alert-success'
		]);
	}
	
	public function edit($id) {
		$program = Programs::findorfail($id);
		$users = User::lists('firstName', 'id');
		
		return view('programs.edit', compact('program', 'users'));
	}
	
	public function update($id, CreateProgramRequest $request)
	{
		$program = Programs::findorfail($id);
		
		$program->update($request->all());
		
		return redirect('programs')->with([
			'flash_message' => 'Program Updated', 
			//'flash_message_important' => true, 
			'flash_alert_class' => 'alert-success'
		]);
		
	}
	
	public function show($id)
	{
		$program = Programs::findorfail($id);
		
		return view('programs.show', compact('program'));
	}
}
