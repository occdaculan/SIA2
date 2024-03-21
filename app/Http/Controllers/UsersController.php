<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use DB;

class UsersController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function contactPage()
    {
        var_dump("contact us");
        return view('contact');
    }

    public function createBlog()
    {
        return view('create-blog');
    }



    public function sampleQuery()
    {
        // Eloquent is an ORM. ORM stands for Object-relational mapping. Eloquent is just a nice layer over database queries. Basically it setups the connection for you and makes building queries easier. ,
        // >get() method is used to retrieve the results of a query.
        $query = Blogs::get();
        // Use DB
        // $query = DB::table('blogs')->get();
        
        // display all with sort desc or asc
        // $query = Blogs::orderBy('id', 'desc')->get();
        
        // The DB facade provides various methods for executing SQL queries, such as select, insert, update, delete, etc.
        // $query =  DB::select("SELECT * FROM blogs ");

        // with conditions
        // $query = Blogs::where('isEnable','=','no')->get();
       
        // $query =  DB::select("SELECT * FROM blogs WHERE  isEnable ='no' ");
       
        // multiple conditions
        // $query = Blogs::where('isEnable','=','yes')->where('user_id','=',1)->get();
        // $query =  DB::select("SELECT * FROM blogs WHERE  isEnable ='no' AND user_id=1 ");

        // join tables
     
        // $query = Blogs::join('blog_details', 'blogs.id', '=', 'blog_details.blog_id')
        //     ->select('blogs.*', 'blog_details.content', 'blog_details.created_at AS blog_details_created_at ')
        //     ->get();
        // $query = DB::table('blogs')
        //     ->join('blog_details', 'blogs.id', '=', 'blog_details.blog_id')
        //     ->select('blogs.*', 'blog_details.content')
        //     ->get();

        dd($query);
    }

    public function blog()
    {
        // all() = display all data
        $data['blogs'] = Blogs::all();
        $data['name'] = "Niel DAculan";
        $data['test'] = "testn data";
        $data['contact'] = 823284624;
        $data['datas'] = 'rrrrr';
        return view('blog', $data);
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
