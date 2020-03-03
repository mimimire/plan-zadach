<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('index', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Task::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect(route('index'));
    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view('edit', ['task'=>$task]);
    }

    public function update($id, Request $request)
    {
        $task = Task::find($id);
        $task->title = $request->title;
        $task->description = $request->description;
        $task->status = $request->status;
        $task->save();
        return redirect(route('index'));// пеекинуть на другую старницу
    }

    public function delete($id)
    {
        Task::destroy($id);
        return redirect(route('index'));
    }
}
