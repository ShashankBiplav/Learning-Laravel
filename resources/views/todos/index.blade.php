@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="h2 mx-auto text-center">All Todos</h1>
        <form id="todos" class="mx-auto align-items-center d-inline">
            @csrf
            <label for="inputTodo" class="sr-only">Start adding todos..</label>
            <input class="form-group p-2 border bg-light" id="inputTodo" type="text" name="title"/>
            <select class="form-group custom-select d-inline" form="todos">
                <option value="general">General</option>
                <option value="important">Important</option>
                <option value="work">Work</option>
                <option value="groceries">Groceries</option>
            </select>
            <input type="submit" value="ADD"/>
        </form>
    </div>
@endsection
