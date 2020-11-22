<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        return view('todos.index');
    }

    public function createTodo(){
        return view('todos.create');
    }

    public function editTodo(){
        return view('todos.edit');
    }
}
