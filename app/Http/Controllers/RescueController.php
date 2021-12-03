<?php

namespace App\Http\Controllers;

use App\Http\Requests\RescueRequest;
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
        return Rescue::orderBy('date')->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RescueRequest $request)
    {
        $data = $request->validated();

        $elem = new Rescue();
        $elem->fill($data)->save();
        $elem->boats()->attach(@$data['boats'] ?? []);
        $elem->castways()->attach(@$data['castways'] ?? []);

        return $elem;
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
    public function update(RescueRequest $request, Rescue $rescue)
    {
        $data = $request->validated();
        $rescue->fill($data)->save();
        $rescue->boats()->sync(@$data['boats'] ?? []);
        $rescue->castways()->sync(@$data['castways'] ?? []);

        return $rescue;
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
