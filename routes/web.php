<?php

Route::get('/', 'HomeController@index');
Route::get('/login', 'LoginController@index');
Route::get('/signup', 'SignupController@index');
Route::get('/registration', 'RegistrationController@index');

