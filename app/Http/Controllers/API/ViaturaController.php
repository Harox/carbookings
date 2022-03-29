<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\viatura;
use Illuminate\Http\Request;

class ViaturaController extends Controller
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
     * @param  \App\Models\bomba  $bomba
     * @return \Illuminate\Http\Response
     */
    public function show(viatura $viatura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bomba  $bomba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, viatura $viatura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bomba  $bomba
     * @return \Illuminate\Http\Response
     */
    public function destroy(viatura $viatura)
    {
        //
    }
}
