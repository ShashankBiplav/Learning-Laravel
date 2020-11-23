@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="h2 mx-auto text-center">All Todos</h1>
        <x-alert/>
        <x-create-todo/>
    </div>
@endsection
