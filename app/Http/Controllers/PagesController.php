<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    // GET INVOLVED

    public function volunteer()
    {
        return view('involved.volunteer');
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
};
