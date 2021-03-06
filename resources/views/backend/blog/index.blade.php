@extends('layouts.backend')

@section('title', 'Blog posts')


@section('content')
  <a href="{{ route('backend.blog.create') }}" class="btn btn-primary">Create new posts</a>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Title</th>
        <th>Slug</th>
        <th>Author</th>
        <th>Published at</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($posts as $post)
        <tr class="{{$post->published_highlight}}">
          <td>
            <a href="{{ route('backend.blog.edit', $post->id) }}">
              {{$post->title}}
            </a>
          </td>
          <td>
            {{$post->slug}}
          </td>
          <td>
            {{$post->author_id}}
          </td>
          <td>
            {{$post->published_date}}
          </td>
          <td>
            <a href="{{ route('backend.blog.edit', $post->id) }}"><span class="glyphicon glyphicon-edit"></span></a>
          </td>
          <td>
            <a href="{{ route('backend.blog.confirm', $post->id) }}"><span class="glyphicon glyphicon-remove"></span></a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  {!! $posts->render() !!}
@endsection