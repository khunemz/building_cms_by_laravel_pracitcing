@extends('layouts.auth')

@section('title', 'Pages')


@section('content')
  <table class="table table-striped">
    <thead>
      <tr>
        <td>Title</td>
        <td>URI</td>
        <td>Name</td>
        <td>Edit</td>
        <td>Delete</td>
      </tr>
    </thead>
    <tbody>
    @if($pages->isEmpty())
      <tr>
        <td colspan="5" align="center">There are no pages</td>
      </tr>
    @else
      @foreach($pages as $page)
      <tr>
        <td>
          <a href="{{ route('backend.pages.edit', $page->id) }}">{{$page->title}}</a>
        </td>
        <td>{{$page->uri}}</td>
        <td>{{$page->name}}</td>
        <td>
          <a href="{{ route('backend.pages.edit', $page->id) }}"><span class="glyphicon glyphicon-edit"></span></a>
        </td>
        <td>
          <a href="{{ route('backend.pages.confirm', $page->id) }}"><span class="glyphicon glyphicon-remove"></span></a>
        </td>
      </tr>
      @endforeach
    @endif
    </tbody>
  </table>
@endsection