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
    $blogs = Blog::latest()->get();
    return view('welcome', compact('blogs'));
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
