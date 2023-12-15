<?php

namespace App\Http\Controllers;

use App\Models\Interviews;
use Illuminate\Http\Request;

class InterviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $event = Interviews::all();
        return $event;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $event = new event;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->place_id = $request->place_id;
        $event->year_event_id = $request->year_event_id;
        $event->status_id = $request->status_id;
        $event->responsible = $request->responsible;
        $event->path = $request->path;

        $event->save();

        return true;
    }

    /**
     * Display the specified resource.
     */
    public function show(Interviews $interviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Interviews $interviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Interviews $interviews)
    {
        $event = Position::Find($request->id);
        $event->name = $request->name;
        $event->update_at = $request->update_at;
        $event->created_at = $request->created_at;

        $event->save();

        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Interviews $interviews)
    {
        Position::destroy($id);

        return true;
    }
}



