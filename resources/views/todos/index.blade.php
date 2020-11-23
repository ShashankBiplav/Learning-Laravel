@extends('layouts.app')

@section('content')
    <x-alert/>
    <div class="row">
        <div class="col-lg-6">
            <x-create-todo/>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-primary text-center">Todos</li>
                                @forelse($todos as $todo)
                                    <li class="d-flex justify-content-start list-group-item">
                                        {{$todo-> title}}  <p class="mx-4">{{$todo->tag}}</p>
                                        <a href="/todos/edit" class="btn btn-outline-success mx-auto">Edit</a>
                                    </li>
                                @empty
                                    No todos to display
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
