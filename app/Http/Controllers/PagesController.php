<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
 

    public function getIndex()
    {
        return view('home');
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