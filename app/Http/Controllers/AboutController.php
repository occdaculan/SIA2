<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Blogs;

class AboutController extends Controller
{
    public function about(){
        return view('about');
    }

    public function saveBlog(){
        $blog = new Blogs();
        $blog->blog_name = 'yeyrr';
        $blog->amount = 300;
        $blog->description = 'This is a sample blog content sample. ';
        $blog->save();
        var_dump($blog->id);
    }

    
}
