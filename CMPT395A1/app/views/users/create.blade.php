@extends('layouts.default')

@section('title')
    Create Account
@stop

@section('content')
    <h1>Create Account</h1>
    
    {{ Form::open(['route' => 'users.store']) }}
    
        <div>
            {{ Form::label('username', 'Username:') }}
            {{ Form::text('username') }}
            {{ $errors->first('username') }}
        </div>
    
        <div>
            {{ Form::label('email', 'Email:') }}
            {{ Form::email('email') }}
            {{ $errors->first('email') }}
        </div>
    
        <div>
            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password') }}
            {{ $errors->first('password') }}
        </div>
        
        <div>
            {{ Form::label('phone', 'Phone #:') }}
            {{ Form::text('phone') }}
        </div>
        
        <div>
            {{ Form::label('name', 'Real Name:') }}
            {{ Form::text('name') }}
        </div>
        
        <div>
            {{ Form::submit() }}
        </div>
        
    {{ Form::close() }}
@stop
