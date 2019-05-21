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
            'img' => 'max:5000',
        ]);

        if ($request->file('img')) {
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('img')->move('images/news', $filenameToStore);
        } else {
            $path = 'images/news/default' . rand(1, 4) . '.jpg';
        }

        $newsitem = new News;

        $newsitem->title = $request['title'];
        $newsitem->headline = $request['headline'];
        $newsitem->body = $request['body'];
        $newsitem->img = $path;

        $newsitem->save();

        return redirect()->route('admin.index')->with('success', 'News Item Added Successfully');
    }

    public function edit($id)
    {
        $newsitem = News::find($id);

        return view('news.edit')->with('newsitem', $newsitem);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'headline' => 'required',
            'body' => 'required',
            'img' => 'max:5000',
        ]);

        if ($request->file('img')) {
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('img')->move('images/news', $filenameToStore);
        } else {
            $path = 'images/news/default' . rand(1, 4) . '.jpg';
        }

        $newsitem = News::find($id);

        $newsitem->title = $request['title'];
        $newsitem->headline = $request['headline'];
        $newsitem->body = $request['body'];
        $newsitem->img = $path;

        $newsitem->save();

        return redirect()->route('admin.index')->with('success', 'News Item Updated Successfully');
    }

    public function destroy($id)
    {
        $newsitem = News::find($id);

        $newsitem->delete();

        return redirect()->route('admin.index')->with('success', 'News Item Deleted');
    }
}
