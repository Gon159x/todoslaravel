<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $task = new Task();
        $task->name = $request->input('name');
        $task->description = $request->input('description');
        $task->save();
        return redirect('/tasks');
    }

    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show', ['task' => $task]);
    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->name = $request->input('name');
        $task->description = $request->input('description');
        $task->save();
        return redirect('/tasks/' . $id);
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect('/tasks');
    }
}