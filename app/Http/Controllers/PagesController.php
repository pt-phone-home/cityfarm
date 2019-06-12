<?php

namespace App\Http\Controllers;

use App\Mail\WebsiteMessage;
use Illuminate\Http\Request;
use \App\Fixture;
use \App\Mail;
use \App\News;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    //OUR COMMUNITY

    public function about()
    {
        return view('community.about');
    }

    public function classes()
    {
        return view('community.classes');
    }
    public function kitchen()
    {
        return view('community.kitchen');
    }
    public function calendar()
    {
        // $events = Fixture::all()->sortBy('date');
        // $events_2 = $events->sortBy('month');
        // $events_3 = $events_2->sortBy('year');

        $events = Fixture::all()->sortByDesc('date')->take(9);
        return view('community.calendar')->with('events', $events);
    }

    // Love

    public function animals()
    {
        return view('love.animals');
    }
    public function grow()
    {
        return view('love.grow');
    }
    public function education()
    {
        return view('love.education');
    }
    public function ecology()
    {
        return view('love.ecology');
    }

    // GET INVOLVED

    public function volunteer()
    {
        return view('involved.volunteer');
    }
    public function corporate()
    {
        return view('involved.corporate');
    }
    public function sponsors()
    {
        return view('involved.sponsors');
    }
    public function donate()
    {
        return view('involved.donate');
    }

    // News

    public function news()
    {
        $news = News::all();
        return view('news')->with('news', $news);
    }

    // INFO

    public function visitus()
    {
        return view('info.visitus');
    }
    public function contact()
    {
        return view('info.contact');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        $email = new Mail;

        $email->name = $request['name'];
        $email->email = $request['email'];
        $email->number = $request['number'];
        $email->message = $request['message'];

        \Mail::to('ptiernan@gmail.com')->send(
            new WebsiteMessage($email)
        );

        return redirect()->route('info.contact')->with('success', 'Thanks for getting in touch. We will get back to you soon');
    }

    public function safety()
    {
        return view('info.safety');
    }

    // ADMIN

    public function admin()
    {
        $news = News::all()->sortByDesc('updated_at');
        $events = Fixture::all()->sortByDesc('updated_at');

        return view('admin.index')->with('news', $news)->with('events', $events);
    }
};
