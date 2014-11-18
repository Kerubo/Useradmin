@extends('layouts.master')
 
@section('title') Login @stop
 
@section('content')
<div class='col-lg-4 col-lg-offset-4'>
<h2><i class='fa fa-lock'></i>User Login </h2>

{{Form::open(['action' => 'AuthController@login'])}}
<div class='form-group'>
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control']) }}
    </div>
 
    <div class='form-group'>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}
    </div>
 
    <div class='form-group'>
        {{ Form::submit('Login', ['class' => 'btn btn-primary']) }}
    </div>
 
{{Form::close()}}
</div>
@stop