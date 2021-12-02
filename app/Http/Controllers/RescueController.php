<?php

namespace App\Http\Controllers;

use App\Models\Rescue;
use Illuminate\Http\Request;

class RescueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Rescue::orderBy('datetime')->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rescue  $rescue
     * @return \Illuminate\Http\Response
     */
    public function show(Rescue $rescue)
    {
        return $rescue;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rescue  $rescue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rescue $rescue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rescue  $rescue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rescue $rescue)
    {
        $rescue->delete();
        return $rescue->id;
    }
}
