<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./scss/style.css">
</head>
<body>

<nav class="navbar-light">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Laravel Website</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/">Home</a></li>
      <!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li> -->
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="/signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<div class="container">
    <form action="" class="box">
        <h2 class="title-text">Member Login</h2>
        <div class="input-box">
            <img src="./svg/email.svg" height="20px" alt="">
            <input type="email" placeholder="Enter Email" name="email">
        </div>
        <div class="input-box">
            <img src="./svg/password.svg" height="20px" alt="">
            <input type="password" placeholder="Enter Password" name="password">
        </div>
        <button class="btn signup-btn" type="submit">Log In</button>

        <!-- <p class="forgot-account-text">Forgot <a href="#">Username / Password?</a></p> -->

        <p class="bottom-log-text">Don't have an account? <a href="./signup">Sign Up</a></p>
    </form>
</div>


    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>