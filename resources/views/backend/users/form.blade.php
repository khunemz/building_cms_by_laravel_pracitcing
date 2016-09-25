@extends('layouts.auth')

@section('title', $user->exists ? 'Editing'.$user->name : 'Create new user')

@section('content')
  {!! Form::model($user , [
    'method' => $user->exists ? 'put' : 'post',
    'route' => $user->exists ? ['backend.users.update'] : ['backend.users.store'],
      'class' => 'form-group'
    ]) !!}
    <div class="form-group">
    {!! Form::label('name') !!}
    {!! Form::text('name', null , ['class' => 'form-control']) !!}
    </div>  

    <div class="form-group">
    {!! Form::label('email') !!}
    {!! Form::email('email', null , ['class' => 'form-control']) !!}
    </div>    

    <div class="form-group">
    {!! Form::label('password') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
    {!! Form::label('password_confirmation') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit($user->exists ? "Save user" : "Create new User" , [ 'class' => 'btn btn-primary'] ) !!}
    </div>
    
  {!! Form::close() !!}
@endsection