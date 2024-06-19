<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardCalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $calendars = Calendar::orderBy('id', 'DESC')->paginate(10);  
        return view('dashboard.calendars.index', compact('calendars')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.calendars.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required'
        ]);


        Calendar::create($validatedData);

        return redirect('/dashboard/calendars')->with('success', 'New calendars has been added!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Calendar $calendar)
    {
        return view('dashboard.calendars.show', [
            'calendar' => $calendar
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Calendar $calendar)
    {
        return view('dashboard.calendars.edit', compact('calendars'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Calendar $calendar)
    {
        $this->validate($request, [  
            'title' => 'required|string|max:151',  
            'body' => 'required'
        ]);  

        $calendar->update([  
            'title' => $request->get('title'),  
            'body' => $request->get('body')
        ]);  

        return redirect()->route('calendar.index')  
            ->with('success', 'Calendar Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Calendar $calendar)
    {
        $calendar->delete();  
        return redirect()  
            ->route('calendar.index')  
            ->with('success', 'Calendar Event deleted successfully.');
    }
}
