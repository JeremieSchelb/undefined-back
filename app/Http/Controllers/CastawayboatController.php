<?php

namespace App\Http\Controllers;

use App\Http\Requests\CastawayboatRequest;
use App\Models\Castawayboat;
use Illuminate\Http\Request;

class CastawayboatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Castawayboat::orderBy('name')->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CastawayboatRequest $request)
    {
        $data = $request->validated();

        $elem = new Castawayboat();
        $elem->fill($data)->save();

        return $elem;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Castawayboat  $castawayboat
     * @return \Illuminate\Http\Response
     */
    public function show(Castawayboat $castawayboat)
    {
        return $castawayboat;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Castawayboat  $castawayboat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Castawayboat $castawayboat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Castawayboat  $castawayboat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Castawayboat $castawayboat)
    {
        $castawayboat->delete();
        return $castawayboat->id;
    }
}
