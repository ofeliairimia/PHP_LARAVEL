<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
        $events = Events::all();
        return view('events.index', compact('events'));
    }
    public function userIndex()
    {
        $events = Events::all();
        return view('events.userindex', compact('events'));
    }

    public function details($id)
    {
        $event = Events::findOrFail($id);
        return view('events.userDetails', compact('event'));
    }

    public  static function find($id)
    {
        $event = Events::findOrFail($id);
        return $event;
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'location' => 'nullable',
            'event_date' => 'required|date',
            'event_time' => 'required',
            'speaker' => 'nullable',
            'partner' => 'nullable',
        ]);

        Events::create($request->all());

        return redirect()->route('events.index')->with('success', 'Event created successfully');
    }

    public function edit($id)
    {
        $event = Events::findOrFail($id);
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'location' => 'nullable',
            'event_date' => 'required|date',
            'event_time' => 'required',
            'speaker' => 'nullable',
            'partner' => 'nullable',
        ]);

        $event = Events::findOrFail($id);
        $event->update($request->all());

        return redirect()->route('events.index')->with('success', 'Event updated successfully');
    }

    public function destroy($id)
    {
        $event = Events::findOrFail($id);
        $event->delete();

        return redirect()->route('events.index')->with('success', 'Event deleted successfully');
    }
}
