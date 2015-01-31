@extends('layouts.default')

@section('title')
    Create Account
@stop

@section('content')
    <h1>Create Account</h1>
    
    {{ Form::open() }}
    
        <div>
            {{ Form::label('username', 'Username:') }}
            {{ Form::text('username') }}
        </div>
    
        <div>
            {{ Form::label('email', 'Email:') }}
            {{ Form::email('email') }}
        </div>
    
        <div>
            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password') }}
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
