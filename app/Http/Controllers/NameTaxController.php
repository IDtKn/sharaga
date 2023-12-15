<?php

namespace App\Http\Controllers;

use App\Models\NameTax;
use Illuminate\Http\Request;

class NameTaxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $event = NameTax::all();
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
    public function show(name_tax $name_tax)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NameTax $name_tax)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NameTax $name_tax)
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
    public function destroy(NameTax $name_tax)
    {
        Position::destroy($id);

        return true;
    }
}
