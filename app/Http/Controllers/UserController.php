<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view('home.login');
    }
    public function index()
    {
        return view('home.index');
    }
}
