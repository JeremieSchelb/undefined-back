<?php

namespace App\Http\Controllers;

use App\Http\Requests\BoatRequest;
use App\Models\Boat;
use Illuminate\Http\Request;

class BoatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Boat::orderBy('name')->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BoatRequest $request)
    {
        $data = $request->validated();

        $elem = new Boat();
        $elem->fill($data)->save();

        return $elem;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Boat  $boat
     * @return \Illuminate\Http\Response
     */
    public function show(Boat $boat)
    {
        return $boat;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Boat  $boat
     * @return \Illuminate\Http\Response
     */
    public function update(BoatRequest $request, Boat $boat)
    {
        $data = $request->validated();
        $boat->fill($data)->save();

        return $boat;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Boat  $boat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boat $boat)
    {
        $boat->delete();
        return $boat->id;
    }
}
