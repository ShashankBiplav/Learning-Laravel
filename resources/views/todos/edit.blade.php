@extends('layouts.app')

@section('content')

    <div class="row mb-4">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('todo.update',$todo->id)}}" method="post" id="todos"
                          class="mx-auto align-items-center d-inline">
                        @csrf

                        <div class="mb-3">
                            <label for="inputTodo" class="form-label">Edit todo..</label>
                            <input class="form-control" id="inputTodo" type="text" name="title"
                                   value="{{$todo->title}}"/>
                        </div>
                        <div class="mb-3">
                            <label for="inputTodo" class="form-label">Choose Category</label>
                            <select name="tag" class="form-control custom-select" form="todos">
                                <option value="general">General</option>
                                <option value="important">Important</option>
                                <option value="work">Work</option>
                                <option value="groceries">Groceries</option>
                            </select>
                        </div>
                        <input class="btn btn-outline-success" type="submit" value="EDIT"/>
                        @method('PUT')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
