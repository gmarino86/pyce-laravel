<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErresBlogController extends Controller
{
    public function verBlog()
    {
        return view('erresBlog');
    }
}
