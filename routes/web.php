<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
  return view ('welcome');
});
Route::get('/home', function () {
   return view ('home');
})-> name('home');
Route::get('/about', function () {
   return view('about');
});

Route::get('/team', function () {
   return view('team');
});
Route::get('/contact', function () {
  return view('contact');
});
Route::get('/login', function () {
   return view('login');
});
//Route::get('/register', function () {
//return view('register');
//});
/*Route::get('/{username?}', function ($username =null) {
    echo $username ?? 'No username';
});*/

Route ::view('register','/register');

