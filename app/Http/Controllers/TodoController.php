<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', ['todos' => $todos]);
    }

    public function editTodo(Todo $todo) //route model binding
    {
        return view('todos.edit', ['todo' => $todo]);
    }

    public function updateTodo(Request $request, Todo $todo)
    {
        $todo->update(['title'=>$request->title,
            'tag'=>$request->tag,
            ]);
        return redirect('/todos')->with('message', 'Todo Updated.');
    }

    public function store(TodoCreateRequest $request)
    {
        Todo::create($request->all());
        return redirect()->back()->with('message', 'Todo Added.');
    }
}
