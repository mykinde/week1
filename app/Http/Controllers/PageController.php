<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function about()
    {
        return '<center> <h1> This is the About Page from a controller.</h1></center>';
    }

    public function contact()
    {
        return '<center> <h1> This is the Contact Page from a controller.</h1></center>';
    }
}
