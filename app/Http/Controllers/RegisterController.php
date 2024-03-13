<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(): View
    {
        return view("register.index", ["title" => "Register", "active" => "register"]);
    }
}
