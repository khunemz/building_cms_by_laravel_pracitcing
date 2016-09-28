<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title') | SDS</title>
  <link rel="stylesheet" href="{{ theme('css/all.css') }}">
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header"><a href="#" class="navbar-brand">
        Logo
      </a></div>
      <ul class="nav navbar-nav">
        @include('partials.navigation')
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        @yield('content')
      </div>
    </div>
  </div>
</body>
</html>