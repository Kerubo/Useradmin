@extends('layouts.master')
 
@section('title') Login @stop
 
@section('content')
 
<div class='col-lg-4 col-lg-offset-4'>
  <div class="page-header">
    <div class="pull-right">
      <a href="{{route('todos.create')}}" class="btn btn-default">Create Todo</a>
      @if(Auth::check())
        <a href="/logout" class="btn btn-primary">Logout</a>
      @endif
    </div>
    <h2><a href="/todos">Todos</a></h2>
  </div>
  @include('todos.search')
  <ul>
    @foreach ($todos as $todo)
      <li>{{ $todo->todo }}</li>
    @endforeach
  </ul>
  </div>
@stop
