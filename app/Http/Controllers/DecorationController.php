<?php

namespace App\Http\Controllers;

use App\Models\Decoration;
use Illuminate\Http\Request;

class DecorationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Decoration::orderBy('label')->paginate(10);
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
     * @param  \App\Models\Decoration  $decoration
     * @return \Illuminate\Http\Response
     */
    public function show(Decoration $decoration)
    {
        return $decoration;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Decoration  $decoration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Decoration $decoration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Decoration  $decoration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Decoration $decoration)
    {
        $decoration->delete();
        return $decoration->id;
    }
}
