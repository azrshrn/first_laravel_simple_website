<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function bloglist() {
        $blog_list = ["Testing1", "Testing2", "Testing3"];
        return view('blogpost.list', ['blog_list' => $blog_list]);
    }

    public function showblog($blog_name) {
        return view(sprintf('blogpost.%s',$blog_name));
    }
}
