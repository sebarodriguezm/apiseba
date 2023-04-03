<?php

namespace App\Http\Controllers;

use App\Models\Tipos;
use Illuminate\Http\Request;

class TiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Tipos::all();
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
     * @param  \App\Models\Tipos  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show(Tipos $tipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tipos  $tipo
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipos $tipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipos  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipos $tipo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipos  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipos $tipo)
    {
        //
    }
}
