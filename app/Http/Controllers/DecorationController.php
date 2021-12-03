<?php

namespace App\Http\Controllers;

use App\Http\Requests\DecorationRequest;
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
    public function store(DecorationRequest $request)
    {
        $data = $request->validated();

        $elem = new Decoration();
        $elem->fill($data)->save();

        return $elem;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Decoration  $decoration
     * @return \Illuminate\Http\Response
     */
    public function show(Decoration $decoration)
    {
        return $decoration->historyChanges();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Decoration  $decoration
     * @return \Illuminate\Http\Response
     */
    public function update(DecorationRequest $request, Decoration $decoration)
    {
        $data = $request->validated();
        $decoration->fill($data)->save();

        return $decoration;
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
