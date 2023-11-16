<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GroomingService;

class GroomingServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grooming_services = Consultation::all();

        return view('grooming_services.index',[
            'consultations' => $consultations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grooming_services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "fullname" => "required",
            "address" => "required",
            "contactnumber" => "required",
            "date" => "required",
            "time" => "required",
            "remarks" => "required",



        ]);

        GroomingService::create([
            "full_name" => $request->fullname,
            "address" => $request->address,
            "contact_number" => $request->contactnumber,
            "date" => $request->date,
            "time" => $request->time,
            "remarks" => $request->remarks,



        ]);

        return back()->with('success', 'Appointment booked!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
