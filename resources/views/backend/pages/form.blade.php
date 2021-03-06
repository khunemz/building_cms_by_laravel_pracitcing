@extends('layouts.backend')

@section('title', $page->exists ? 'Editing '.$page->title : 'Create New Page')

@section('content')
    {!! Form::model($page, [
        'method' => $page->exists ? 'put' : 'post',
        'route' => $page->exists ? ['backend.pages.update', $page->id] : ['backend.pages.store']
    ]) !!}
    
    <div class="form-group">
      {!! Form::label('title') !!}
      {!! Form::text('title',null , ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('url', 'URL') !!}
      {!! Form::text('url', null ,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('name') !!}
      {!! Form::text('name', null ,['class' => 'form-control']) !!}
      <p class="help-block">This name is used to generate links to the page</p>
    </div>

    <div class="form-group row">
      <div class="col-md-8">
        {!! Form::label('template') !!}
      </div>
      <div class="col-md-4">
        {!! form::select('template' , $template, null , ['class' => 'form-control']) !!}
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-12">
        {!! Form::label('order') !!}
      </div>
      <div class="col-md-2">
        {!! Form:select('order', [
          '' => '',
          'before' => 'Before',
          'after' => 'After',
          'childOf' => 'Child of'
        ])!!}
      </div>
      <div class="col-md-5">
        {!! Form::select('orderPage' , ['padded_title' => ''] + $orderPages->lists('title', 'id')->toArray(), null ,['class' => 'form-control'] ) !!}
      </div>
    </div>

    <div class="form-group">
      {!! Form::label('content') !!}
      {!! Form::textarea('content', null ,['class' => 'form-control']) !!}
    </div>

    <div class="checkbox">
      <label for="
      {!! Form::checkbox('hidden') !!}">
      Hide page from navigation
      <span class="help-block">
        Checking this for hidding page from navligation!!
      </span>
      </label>
    </div>

    {!! Form::submit($page->exists ? 'Save page' : 'Create new Page', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
    
    <script>
      new SimpleMDE().render();
    </script>
@endsection


