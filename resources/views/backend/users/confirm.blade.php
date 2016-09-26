@extends('layouts.auth')

@section('title', 'Delete :' . $user->name)

@section('content')
  {!! Form::open(['method' => 'delete', 'route' => ['backend.users.destroy', $user->id]]) !!}
  <div class="alert alert-danger">
    <strong>Warning !!</strong> You are about to delete a user permanently.
  </div>

  {!! Form::submit("Yes, I understand , proceed to delete this user" , ['class' => 'btn btn-danger']) !!}
  
  <a href="{{ route('backend.users.index') }}" class="btn btn-success">go Back</a>
  {!! Form::close() !!}
@endsection