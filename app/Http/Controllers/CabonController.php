<?php

namespace App\Http\Controllers;

use App\Models\Cabon;
use Illuminate\Http\Request;

class CabonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return  view('welcome');
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
     * @param  \App\Models\Cabon  $cabon
     * @return \Illuminate\Http\Response
     */
    public function show(Cabon $cabon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cabon  $cabon
     * @return \Illuminate\Http\Response
     */
    public function edit(Cabon $cabon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cabon  $cabon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cabon $cabon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cabon  $cabon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cabon $cabon)
    {
        //
    }
}
