<?php

namespace App\Http\Controllers;

use App\Http\Requests\RescuerRequest;
use App\Models\Rescuer;
use Illuminate\Http\Request;

class RescuerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Rescuer::orderBy('firstname')->orderBy('lastname')->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RescuerRequest $request)
    {
        $data = $request->validated();

        $elem = new Rescuer();
        $elem->fill($data)->save();

        return $elem;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rescuer  $rescuer
     * @return \Illuminate\Http\Response
     */
    public function show(Rescuer $rescuer)
    {
        return $rescuer->historyChanges();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rescuer  $rescuer
     * @return \Illuminate\Http\Response
     */
    public function update(RescuerRequest $request, Rescuer $rescuer)
    {
        $data = $request->validated();
        $rescuer->fill($data)->save();

        return $rescuer;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rescuer  $rescuer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rescuer $rescuer)
    {
        $rescuer->delete();
        return $rescuer->id;
    }
}
