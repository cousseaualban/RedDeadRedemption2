<?php

namespace App\Http\Controllers;

use App\Models\Gangs;
use App\Http\Requests\StoreGangsRequest;
use App\Http\Requests\UpdateGangsRequest;

class GangsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGangsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGangsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gangs  $gangs
     * @return \Illuminate\Http\Response
     */
    public function show(Gangs $gangs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gangs  $gangs
     * @return \Illuminate\Http\Response
     */
    public function edit(Gangs $gangs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGangsRequest  $request
     * @param  \App\Models\Gangs  $gangs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGangsRequest $request, Gangs $gangs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gangs  $gangs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gangs $gangs)
    {
        //
    }
}
