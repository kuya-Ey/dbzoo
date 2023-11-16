<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetBoarding;

class PetBoardingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pet_boardings = PetBoarding::all();

        return view('pet_boardings.index',[
            'pet_boardings' => $pet_boardings
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pet_boardings.create');
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
            "petname" => "required",
            "contactnumber" => "required",
            "start" => "required",
            "end" => "required",
            "remarks" => "required",



        ]);

        PetBoarding::create([
            "full_name" => $request->fullname,
            "pet_name" => $request->petname,
            "contact_number" => $request->contactnumber,
            "started_at" => $request->start,
            "ended_at" => $request->end,
            "remarks" => $request->remarks,



        ]);

        return back()->with('success' , ('Reservation completed.'));
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
