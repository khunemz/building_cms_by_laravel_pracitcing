@extends('layouts.auth')

@section('title', 'Login')

@section('heading', 'Welcome please login')

@section('content')


  {!! Form::open() !!}
    <div class="form-group">
      {!! Form::label('email') !!}
      {!! Form::text('email', null , [ 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('password') !!}
      {!! Form::password('password' , [ 'class' => 'form-control' ]) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}
    </div>
    <a href="{{ route('auth.password.email') }}" class="small">Forgot Password ??</a>
    {!! csrf_field() !!}
  {!! Form::close() !!}
@endsection