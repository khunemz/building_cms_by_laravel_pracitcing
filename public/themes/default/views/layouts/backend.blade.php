<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width , initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title') Fucking shit project !!!</title>
  <link rel="stylesheet" href="{{ theme('style/all.css') }}">
  <script src="{{ theme('script/all.js') }}"></script>

</head>
<body>
  <div class="navbar nav-static-top navbar-default">
    <div class="container">
      <div class="navbar-header"><a href="/" class="navbar-brand">SDS</a></div>
      <ul class="nav navbar-nav">
        <li><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('backend.users.index') }}">Users</a></li>
        <li><a href="{{ route('backend.pages.index') }}">Pages</a></li></li>
        <li><a href="{{ route('backend.blog.index') }}">Blogs</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><span class="navbar-text"> 
            @if(empty($admin))
              <!-- You are now logged in as a gueast -->
            @else
              Hi, {{ $admin->email }}
            @endif
          </span>
        </li>
        <li><a href="{{ route('auth.logout') }}">Log out</a></li>
      </ul>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <h3>
          @yield('title')
        </h3>
        @if($errors->any())
        <div class="alert alert-danger">
          <strong>Whoopss we found some errors!</strong>
          <ul>
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
        @endif

        @if($status)
          <div class="alert alert-info">
            {{$status}}
          </div>
        @endif

        @yield('content')
      </div>
    </div>
  </div>

</body>
</html>