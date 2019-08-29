<?php

namespace App\Http\Controllers;

use App\Mail\WebsiteMessage;
use Illuminate\Http\Request;
use \App\Fixture;
use \App\Mail;
use \App\News;
use Carbon;
use Merujan99\LaravelVideoEmbed\Facades\LaravelVideoEmbed;

class PagesController extends Controller
{
    public function index()
    {
        $url1 = 'https://www.youtube.com/watch?v=OptZHeZUUno';
        $url2 = 'https://www.youtube.com/watch?v=z3GKYuQBjhE';
        $whitelist = ['YouTube'];
        $params = [
            'autoplay' => 0,
            'loop' => 0,
        ];
        $video1 = LaravelVideoEmbed::parse($url1, $whitelist);
        $video2 = LaravelVideoEmbed::parse($url2, $whitelist);

        return view('index', compact('video1', 'video2'));
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

        $now = Carbon::now()->startOfMonth();

        $events = Fixture::where('date', '>=', $now)->take(18)->orderBy('date')->get();
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
        $url = 'https://www.youtube.com/watch?v=ULouTFHWruU';
        $whitelist = ['YouTube'];
        $params = [
            'autoplay' => 0,
            'loop' => 0,
        ];
        $video = LaravelVideoEmbed::parse($url, $whitelist, $params);
        return view('involved.donate', compact('video'));
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

        \Mail::to('dublincityfarm@gmail.com')->send(
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