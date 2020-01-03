<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
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
            <h2 class="title-text">Create Account</h2>

            <div class="input-box">
                <img src="./svg/user.svg" height="20px" alt="">
                <input type="name" placeholder="First Name" name="firstName">
            </div>
            <div class="input-box">
                <img src="./svg/user.svg" height="20px" alt="">
                <input type="name" placeholder="Last Name" name="lastName">
            </div>

            <div class="input-box">
                <img src="./svg/phone.svg" height="20px" alt="">
                <input type="number" placeholder="Phone Number" name="phoneNumber">
            </div>

            <div class="input-box">
                <img src="./svg/email.svg" height="20px" alt="">
                <input type="email" placeholder="Email" name="email">
            </div>

            <div class="input-box">
                <img src="./svg/password.svg" height="20px" alt="">
                <input type="password" placeholder="Password" name="password">
            </div>

            <div class="input-box">
                <img src="./svg/password.svg" height="20px" alt="">
                <input type="password" placeholder="Conform Password" name="conformPassword">
            </div>

            <button class="btn signup-btn" type="submit">Sign Up</button>

            <p class="bottom-log-text">Have already an account? <a href="./login">Log In</a></p>
        </form>
    </div>


    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>