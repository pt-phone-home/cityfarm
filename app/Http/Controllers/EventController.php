<?php

namespace App\Http\Controllers;

use App\Event;
use Calendar;

class EventController extends Controller
{
    public function index()
    {
        $events = [];

        $data = Event::all();

        if ($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date . ' +1 day'),
                    null,
                    // add color and link
                    [
                        'color' => '#f050505',
                        'url' => 'http://www.google.ie',
                    ]
                );
            }
        };

        $calendar = Calendar::addEvents($events);

        return view('community.calendar')->with('calendar', $calendar);
    }
}
