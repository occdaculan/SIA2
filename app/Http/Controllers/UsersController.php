<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Blogs;

class UsersController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function contactPage(){
        var_dump("contact us");
        return view('contact');
    }

    public function createBlog(){
        return view('create-blog');
    }

    public function blog(){
        // all() = display all data
        $data['blogs'] = Blogs::all();
        $data['name'] = "Niel DAculan";
        $data['test'] = "testn data";
        $data['contact'] = 823284624;
        $data['datas'] = 'rrrrr';
        return view('blog',$data);
    }
    
    public function saveBlog(Request $request)
    {
        // var_dump($_POST);
        // $request->all() = display all post data
        $blog = new Blogs();
        $blog->blog_name = $request->blog_name;
        $blog->amount = $request->amount;
        $blog->description = $request->description;
        $blog->save();
        return redirect()->route('home');
    }

    
}
