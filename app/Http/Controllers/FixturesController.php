<?php

namespace App\Http\Controllers;

use App\Fixture;
use Illuminate\Http\Request;

class FixturesController extends Controller
{
    public function show($id)
    {

        $event = Fixture::findOrFail($id);

        return view('community.calendaritem')->with('event', $event);
    }

    public function create()
    {
        return view('community.calendar.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'headline' => 'required',
            'short_description' => 'required',
            'location' => 'required',
            'date' => 'required|date',
            'time_from' => 'required',
            'time_to' => 'required',
            'content' => 'required',
            'link' => 'url',
            'img' => 'image',
        ]);

        if ($request->file('img')) {
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('img')->move('images/events', $filenameToStore);
        } else {
            $path = 'images/events/default' . rand(1, 4) . '.jpg';
        }

        $event = new Fixture;

        $event->title = $request['title'];
        $event->headline = $request['headline'];
        $event->short_description = $request['short_description'];
        $event->location = $request['location'];
        $event->date = $request['date'];
        $event->time_from = $request['time_from'];
        $event->time_to = $request['time_to'];
        $event->content = $request['content'];
        $event->link = $request['link'];
        $event->img = $path;

        // dd($event);

        $event->save();

        return redirect()->route('admin.index')->with('success', 'Event Added Successfully');
    }

    public function edit($id)
    {
        $event = Fixture::findOrFail($id);

        return view('community.calendar.edit')->with('event', $event);
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required',
            'headline' => 'required',
            'short_description' => 'required',
            'location' => 'required',
            'date' => 'required|date',
            'time_from' => 'required',
            'time_to' => 'required',
            'content' => 'required',
            'link' => 'url',
            'img' => 'image',
        ]);

        $event = Fixture::findOrFail($id);

        if ($request->file('img')) {
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('img')->move('images/events', $filenameToStore);

            $event->img = $path;
        }

        $event->title = $request['title'];
        $event->headline = $request['headline'];
        $event->short_description = $request['short_description'];
        $event->location = $request['location'];
        $event->date = $request['date'];
        $event->time_from = $request['time_from'];
        $event->time_to = $request['time_to'];
        $event->content = $request['content'];
        $event->link = $request['link'];

        $event->save();

        return redirect()->route('admin.index')->with('success', 'Event Updated Successfully');
    }

    public function destroy($id)
    {

        $event = Fixture::findOrFail($id);

        $event->delete();

        return redirect()->route('admin.index')->with('success', 'Event Deleted Successfully');
    }
}
