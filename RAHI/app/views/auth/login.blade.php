@extends('layouts.master')
 
@section('title') Login @stop
 
@section('content')
 <body background="http://www.sonicavenger.com/uploaded_images/ClearBlueSky-741012.jpg"  border:5px solid orange>

<div class='col-lg-4 col-lg-offset-4'  style="backround:#fff;border:5px solid #ff7400;">
<h1 color:#0072BB;> <i class="fa fa-lock"></i>  User Login here</h1>

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
</body>
@stop