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
        
        <div>
            {{ Form::label('phone', 'Phone #:') }}
            {{ Form::phone('phone') }}
        </div>
        
        <div>
            {{ Form::label('name', 'Real Name:') }}
            {{ Form::name('name') }}
        </div>
        
        <div>
            {{ Form::submit() }}
        </div>
        
    {{ Form::close() }}
@stop
