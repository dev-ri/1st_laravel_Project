@extends('index')

@section('pageTitle')
    Log In
@endsection

@section('container')
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
@endsection