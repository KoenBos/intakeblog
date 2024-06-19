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
        $first = 'Koen';
        $last = 'Bos';
        $full = $first . " " . $last;
        return view('about')->with("fullname", $full);
    }

    public function getcontact()
    {
        return view('contact');
    }

}