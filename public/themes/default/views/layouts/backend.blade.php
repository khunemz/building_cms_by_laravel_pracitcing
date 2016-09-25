<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width , initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title') Fucking shit project !!!</title>
  <link rel="stylesheet" href="{{ theme('style/all.css') }}">
</head>
<body>
  <div class="navbar nav-static-top navbar-default">
    <div class="container">
      <div class="navbar-header"><a href="/" class="navbar-brand">SDS</a></div>
      <ul class="nav navbar-nav">
        <li><a href="#">Item 1</a></li>
        <li><a href="#">Item 2</a></li>
        <li><a href="#">Item 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><span class="navbar-text">Hi, M</span></li>
        <li><a href="#">Log out</a></li>
      </ul>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>
          @yield('title')
        </h3>

        @yield('content')
      </div>
    </div>
  </div>
</body>
</html>