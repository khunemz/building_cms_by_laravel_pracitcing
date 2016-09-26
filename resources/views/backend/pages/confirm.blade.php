@extends('layouts.backend')

@section('title', 'Confirm delete : ' . $page->title)


@section('content')
{!! Form::open(['method' => 'delete', 'route' => ['backend.pages.destroy', $page->id]]) !!}
  <div class="alert alert-danger">
    <strong>Warning !!</strong> You are about to delete a user permanently.
  </div>

  {!! Form::submit("Yes, I understand , proceed to delete this page" , ['class' => 'btn btn-danger']) !!}
  
  <a href="{{ route('backend.pages.index') }}" class="btn btn-success">go Back</a>
  {!! Form::close() !!}
@endsection