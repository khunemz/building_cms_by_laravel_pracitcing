<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title') | Chutipong cms</title>
  <link rel="stylesheet" href="{{ theme("style/all.css") }}">
</head>
<body>
  <div class="container">
    <div class="row vertical-center">
      <div class="col-md-4"></div>

      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">
              @yield('heading')
            </h2>
          </div>
          <div class="panel-body">
            @yield('content')
          </div>
        </div>
      </div>

      <div class="col-md-4"></div>
    </div>
  </div>
</body>
</html>