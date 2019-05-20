<?php

namespace App\Http\Controllers;

use App\Fixture;

class FixturesController extends Controller
{
    public function show($id)
    {

        $event = Fixture::findOrFail($id);

        return view('community.calendaritem')->with('event', $event);
    }
}
