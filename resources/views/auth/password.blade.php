@extends('layouts.auth')

@section('title', 'Forgot password?')

@section('heading', 'Please provide your email to send reset password instruction')

@section('content')


  {!! Form::open() !!}
    <div class="form-group">
      {!! Form::label('email') !!}
      {!! Form::text('email', null , [ 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Send reset password Link', ['class' => 'btn btn-primary']) !!}
    </div>
    <a href="{{ route('auth.login') }}" class="small">Have an account ?</a>
    {!! csrf_field() !!}
  {!! Form::close() !!}
@endsection