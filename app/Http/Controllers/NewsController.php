<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\News;

class NewsController extends Controller
{

    public function newsitem($id)
    {
        $newsitem = News::find($id);

        return view('newsitem')->with('newsitem', $newsitem);
    }
    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'headline' => 'required',
            'body' => 'required',
            'image' => 'max:5000',
        ]);

        if ($request->file('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('image')->move('images/news', $filenameToStore);
        } else {
            $path = 'images/news/default' . rand(1, 4) . '.jpg';
        }

        $newsitem = new News;

        $newsitem->title = $request['title'];
        $newsitem->headline = $request['headline'];
        $newsitem->body = $request['body'];
        $newsitem->image = $path;

        $newsitem->save();

        return redirect()->route('admin.index')->with('success', 'News Item Added Successfully');
    }
}
