<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class AboutController extends Controller
{
    public function show(): View
    {
        return view("about", [
            "title" => "About",
            "name" => "ZIldjian Vito",
            "email" => "Kocak@gmail.com",
            "points" => [100, 90, 95, 100]
        ]);
    }
}
