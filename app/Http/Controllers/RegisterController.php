<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(): View
    {
        return view("register.index", ["title" => "Register", "active" => "register"]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => "required|max:255|min:6",
            "username" => "required|min:4|max:255|unique:users",
            "email" => "required|min:3|max:255|email|unique:users",
            "password" => "required|min:4|max:255"
        ]);

        $validatedData["password"] = Hash::make($validatedData["password"]);

        User::create($validatedData);
        return redirect("/login")->with("status", "Task was successful");
    }
}
