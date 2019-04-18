<?php

namespace App\Http\Controllers;

use \App\News;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    //OUR COMMUNITY

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

    public function safety()
    {
        return view('info.safety');
    }

    // ADMIN

    public function admin()
    {
        $news = News::all();

        return view('admin.index')->with('news', $news);
    }
};
