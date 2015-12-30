<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CreateProgramRequest;
use App\Programs;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProgramsController extends Controller
{
    public function index()
	{
		$programs = Programs::orderby('name')->active()->get();
		
		return view('programs.index', compact('programs'));
	}
	
	public function create()
	{
		return view('programs.create');
	}
	
	public function store(CreateProgramRequest $request)
	{
		Programs::create($request->all());
		
		return redirect('programs')->with([
			'flash_message' => 'Program Created', 
			//'flash_message_important' => true, 
			'flash_alert_class' => 'alert-success'
		]);
	}
	
	public function edit($id) {
		$program = Programs::findorfail($id);
		
		return view('programs.edit', compact('program'));
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
}
