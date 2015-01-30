@extends('layouts.default')

@section('title')
    Edit Account Info
@stop

@section('content')
    <h1>Edit Account Info</h1>
    
    {{ Form::open() }}
    
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
            {{ Form::submit('Save') }}
        </div>
        
    {{ Form::close() }}
@stop
