<?php

namespace App\Http\Controllers;

use App\Http\Requests\CastawayRequest;
use App\Models\Castaway;
use Illuminate\Http\Request;

class CastawayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Castaway::orderBy('firstname')->orderBy('lastname')->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CastawayRequest $request)
    {
        $data = $request->validated();

        $elem = new Castaway();
        $elem->fill($data)->save();
        $elem->rescues()->attach(@$data['rescues'] ?? []);


        return $elem;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Castaway  $castaway
     * @return \Illuminate\Http\Response
     */
    public function show(Castaway $castaway)
    {
        return $castaway->historyChanges();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Castaway  $castaway
     * @return \Illuminate\Http\Response
     */
    public function update(CastawayRequest $request, Castaway $castaway)
    {
        $data = $request->validated();
        $castaway->fill($data)->save();
        $castaway->rescues()->sync(@$data['rescues'] ?? []);

        return $castaway;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Castaway  $castaway
     * @return \Illuminate\Http\Response
     */
    public function destroy(Castaway $castaway)
    {
        $castaway->delete();
        return $castaway->id;
    }
}
