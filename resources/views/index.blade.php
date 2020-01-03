<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./scss/style.css">
  </head>
  <body>

<!-- Nav -->
  
    <nav class="navbar-light">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="/">Laravel Website</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="/">Home</a></li>
          <li><a href="/registration">Registration</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </nav>

<!-- container -->

    <div class="container">
      @yield('container')
    </div>

<!-- Scripts -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
