@extends('layouts.backend')

@section('title', 'Confirm delete : ' . $post->title)


@section('content')
{!! Form::open(['method' => 'delete', 'route' => ['backend.posts.destroy', $post->id]]) !!}
  <div class="alert alert-danger">
    <strong>Warning !!</strong> You are about to delete a user permanently.
  </div>

  {!! Form::submit("Yes, I understand , proceed to delete this post" , ['class' => 'btn btn-danger']) !!}
  
  <a href="{{ route('backend.posts.index') }}" class="btn btn-success">go Back</a>
  {!! Form::close() !!}
@endsection