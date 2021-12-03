<?php

namespace App\Http\Controllers;

use App\Http\Requests\RescuerRescueRequest;
use App\Models\RescuerRescue;
use Illuminate\Http\Request;

class RescuerRescueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RescuerRescue::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RescuerRescueRequest $request)
    {
        $data = $request->validated();

        $elem = new RescuerRescue();
        $elem->fill($data)->save();

        return $elem;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RescuerRescue  $rescuerRescue
     * @return \Illuminate\Http\Response
     */
    public function show(RescuerRescue $rescuerRescue)
    {
        return $rescuerRescue;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RescuerRescue  $rescuerRescue
     * @return \Illuminate\Http\Response
     */
    public function update(RescuerRescueRequest $request, RescuerRescue $rescuerRescue)
    {
        $data = $request->validated();
        $rescuerRescue->fill($data)->save();

        return $rescuerRescue;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RescuerRescue  $rescuerRescue
     * @return \Illuminate\Http\Response
     */
    public function destroy(RescuerRescue $rescuerRescue)
    {
        $rescuerRescue->delete();
        return $rescuerRescue->id;
    }
}
