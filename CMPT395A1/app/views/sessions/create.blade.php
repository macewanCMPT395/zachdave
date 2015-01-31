@extends('layouts.default')

@section('title')
    Log-In
@stop

@section('content')
    <h1>Log-In</h1>
    
    {{ Form::open(['route' => 'sessions.store']) }}
    
        <div>
            {{ Form::label('email', 'Email:') }}
            {{ Form::email('email') }}
        </div>
    
        <div>
            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password') }}
        </div>
        
        <div>{{ Form::submit('Log-In') }}</div>
        
    {{ Form::close() }}
@stop
