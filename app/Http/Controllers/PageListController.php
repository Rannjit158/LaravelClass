<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageListController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function team()
    {
        return view('team');
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function welcome()
    {
        return view('welcome');
    }
}
