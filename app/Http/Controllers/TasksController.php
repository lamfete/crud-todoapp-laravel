<?php

namespace App\Http\Controllers;

use Session;

use Illuminate\Http\Request;

use App\Task;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{
    public function index()
    {
    	$tasks = Task::all();

    	return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
    	return view('tasks.create');
    }

    public function store(Request $request)
    {
    	/*
    	dd($request->all()); */

    	$this->validate($request, [
    		'title' => 'required',
    		'description' => 'required'
    	]);

    	$input = $request->all();
    	Task::create($input);

    	Session::flash('flash_message', 'Task successfully added!');

    	//return redirect('tasks');
    	return redirect()->back();
    }

    public function show($id)
    {
    	$task = Task::findOrFail($id);
    	return view('tasks.show', compact('task'));
    }

    public function edit($id)
    {
    	$task = Task::findOrFail($id);
    	return view('tasks.edit', compact('task'));
    }

    public function update($id, Request $request)
    {
    	$task = Task::findOrFail($id);

    	$this->validate($request, [
    		'title' => 'required',
    		'description' => 'required'
    	]);

    	$input = $request->all();

    	$task->fill($input)->save();

    	Session::flash('flash_message', 'Task successfully updated!');

    	return redirect()->back();
    }

    public function destroy($id)
    {
    	$task = Task::findOrFail($id);

    	$task->delete();

    	Session::flash('flash_message', 'Task successfully deleted!');

    	return redirect()->route('tasks.index');
    }
}
