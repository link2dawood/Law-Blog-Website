<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    $latests = Blog::take(4)->get();
    $virals = Blog::take(6)->get();
    $blogs = Blog::latest()->get();
    return view('welcome', compact('blogs','latests','virals'));
    }
    public function about()
    {
    return view('about');
    }
    public function contact()
    {
    return view('contact');
    }


    public function blog_detail(Request $request, $id)
    {
    $blog = Blog::find($id);
    $latest = Blog::latest()->get();
    return view('blog-detail', compact('blog', 'latest'));
    }
    public function blogs()
    {
    $blogs = Blog::latest()->get();
    return view('blogs', compact('blogs'));
    }
    public function home()
    {

        return view('home');
    }

}
