@extends('layouts.default')

@section('title')
    Create Account
@stop

@section('content')
    <h1>Create Account</h1>
    
    {{ Form::open() }}
    
        <div>
            {{ Form::label('username', 'Username:') }}
            {{ Form::uname('username') }}
        </div>
    
        <div>
            {{ Form::label('email', 'Email:') }}
            {{ Form::email('email') }}
        </div>
    
        <div>
            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password') }}
        </div>
        
    {{ Form::close() }}
@stop
