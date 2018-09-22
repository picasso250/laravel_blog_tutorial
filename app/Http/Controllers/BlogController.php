<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function newBlog(Request $request)
    {
        $blog = new Blog();

        $blog->title = $request->title;
        $blog->content = $request->content;

        $blog->save();
        
        return 'ok';
    }
}