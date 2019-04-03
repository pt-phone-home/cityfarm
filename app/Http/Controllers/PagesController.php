<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {

        return view('index');
    }

    public function visitus()
    {
        return view('info.visitus');
    }
}
