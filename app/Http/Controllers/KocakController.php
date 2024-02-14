<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class KocakController extends Controller
{
    public function show(): View
    {
        return view("kocak", ["title" => " Kocak"]);
    }
}
