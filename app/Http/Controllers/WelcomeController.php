<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return "<center> <h1>Welcome to your Laravel journey!</h1></center>";
    }
}
