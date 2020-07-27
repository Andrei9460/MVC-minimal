<?php

namespace App\Controller;

use App\Model\Blog as Blog;

class BlogController
{
    public function index(){
        $blog = new Blog();
        $obj = $blog->get();

        return Render('blog', ['Blog' => $obj->toArray()]);
    }
}