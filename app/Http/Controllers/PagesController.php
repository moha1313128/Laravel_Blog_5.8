<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Mail;
use Session;

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

    // Sending Email
    public function postContact(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'min:3',
            'message' => 'min:10'
          ]);
        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );
        Mail::send('emails.contact', $data, function($message) use ($data) {
            $message->from($data['email']);
            $message->to('moha1313128@gmail.com');
            $message->subject($data['subject']);
        });

        Session::flash('success', 'Your message was sent successfully');
        return redirect('/');
    }
}
