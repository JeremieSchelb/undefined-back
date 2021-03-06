<?php

namespace App\Http\Controllers;

use App\Http\Requests\RescuerRoleRequest;
use App\Models\RescuerRole;
use Illuminate\Http\Request;

class RescuerRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RescuerRole::orderBy('label')->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RescuerRoleRequest $request)
    {
        $data = $request->validated();

        $elem = new RescuerRole();
        $elem->fill($data)->save();

        return $elem;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RescuerRole  $rescuerRole
     * @return \Illuminate\Http\Response
     */
    public function show(RescuerRole $rescuerRole)
    {
        return $rescuerRole->historyChanges();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RescuerRole  $rescuerRole
     * @return \Illuminate\Http\Response
     */
    public function update(RescuerRoleRequest $request, RescuerRole $rescuerRole)
    {
        $data = $request->validated();
        $rescuerRole->fill($data)->save();

        return $rescuerRole;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RescuerRole  $rescuerRole
     * @return \Illuminate\Http\Response
     */
    public function destroy(RescuerRole $rescuerRole)
    {
        $rescuerRole->delete();
        return $rescuerRole->id;
    }
}
