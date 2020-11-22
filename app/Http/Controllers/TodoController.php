<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return view('todos.index');
    }

    public function createTodo()
    {
        return view('todos.create');
    }

    public function editTodo()
    {
        return view('todos.edit');
    }

    public function store(Request $request)
    {
//        $request->validate([
//            'title' => 'required| max:255',
//            'tag' => 'required',
//        ]);
        $rules = [
            'title' => 'required| max:255',
            'tag' => 'required',
        ];
        $messages = [
            'title.max' => 'Todo title should be less than 255 characters.',

        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        Todo::create($request->all());
        return redirect()->back()->with('message', 'Todo Added.');
    }
}
