<?php

namespace App\Http\Controllers;
use App\Models\Post;

class PagesController extends Controller
{
 

    public function getIndex()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('home')->withPosts($posts);
    }
    public function getabout()
    {
        return view('about');
    }

    public function getcontact()
    {
        return view('contact');
    }

}