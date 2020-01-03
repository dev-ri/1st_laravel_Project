@extends('index')

@section('pageTitle')
    Sign Up
@endsection

@section('container')
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
@endsection