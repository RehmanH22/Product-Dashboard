<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = Task::paginate(10);

        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store()
    {
        $validatedAttributes = request()->validate([
            'description' => 'required',
        ]);

        Task::create($validatedAttributes);

        //return redirect()->route('tasks.index');
        return redirect('/tasks');
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Task $task)
    {
        $validatedAttributes = request()->validate([
            'description' => 'required',
        ]);

        $task->update($validatedAttributes);

        //return redirect()->route('tasks.index');
        return redirect('/tasks');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        //return redirect()->route('tasks.index');
        return redirect('/tasks');
    }
}
