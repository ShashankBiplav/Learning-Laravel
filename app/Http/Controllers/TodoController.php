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
        return view('todos.index',['todos'=> $todos]);
    }

    public function createTodo()
    {
        return view('todos.create');
    }

    public function editTodo()
    {
        return view('todos.edit');
    }

    public function store(TodoCreateRequest $request)
    {
        Todo::create($request->all());
        return redirect()->back()->with('message', 'Todo Added.');
    }
}
