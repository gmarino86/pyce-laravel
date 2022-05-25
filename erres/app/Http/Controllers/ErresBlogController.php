<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class ErresBlogController extends Controller
{
    public function verBlog()
    {
        $blogs = Blog::all();

        return view('erresBlog',[
            'blogs' => $blogs
        ]);
    }
}
