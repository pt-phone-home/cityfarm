<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    public function create()
    {
        return view('news.create');
    }
}
