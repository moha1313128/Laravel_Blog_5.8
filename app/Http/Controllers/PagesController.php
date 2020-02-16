<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{  
    public function getIndex()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages.welcome')->withPost($posts);
    }    

    public function getAbout()
    {
        $first = 'Mohammed';
        $last = 'ETAYBY';
        $fullname = $first . " " . $last;
        $email = 'mohammed.ettaibi@edu.uca.ma';
        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname;

        return view('pages.about')->withData($data);
    }

    public function getContact()
    {
        return view('pages.contact');
    }
}
