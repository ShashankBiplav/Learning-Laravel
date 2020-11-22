@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="h2 mx-auto text-center">All Todos</h1>
        <x-alert/>
        <form method="post" action="/todos/create" id="todos" class="mx-auto align-items-center d-inline">
            @csrf
            <div class="row">
                <label for="inputTodo" class="sr-only">Start adding todos..</label>
                <input class="form-group col-6" id="inputTodo" type="text" name="title"/>
                <select name="tag" class="form-group custom-select col-2" form="todos">
                    <option value="general">General</option>
                    <option value="important">Important</option>
                    <option value="work">Work</option>
                    <option value="groceries">Groceries</option>
                </select>
                <input class="btn btn-outline-success col" type="submit" value="ADD"/>
            </div>
        </form>
    </div>
@endsection
