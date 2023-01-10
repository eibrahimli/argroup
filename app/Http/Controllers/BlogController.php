<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index (Request $request) {
        $query = Blog::query();
        $search = $request->input('search', null);

        if($search):
            $query->where('title', 'like', '%'.$search.'%');
        endif;

        $blogs = $query->get();

        return view('blog.main',compact('blogs'));
    }

    public function show(Blog $blog) {

        return view('blog.show',compact('blog'));
    }
}
