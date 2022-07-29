<?php

namespace App\Http\Controllers;

use App\Models\Fasilitasumum;
use App\Http\Requests\StoreFasilitasumumRequest;
use App\Http\Requests\UpdateFasilitasumumRequest;

class FasilitasumumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Fasilitasumum::all();
        return view('admin.fasilitasumum.fasilitas',compact('data'));
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
     * @param  \App\Http\Requests\StoreFasilitasumumRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFasilitasumumRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fasilitasumum  $fasilitasumum
     * @return \Illuminate\Http\Response
     */
    public function show(Fasilitasumum $fasilitasumum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fasilitasumum  $fasilitasumum
     * @return \Illuminate\Http\Response
     */
    public function edit(Fasilitasumum $fasilitasumum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFasilitasumumRequest  $request
     * @param  \App\Models\Fasilitasumum  $fasilitasumum
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFasilitasumumRequest $request, Fasilitasumum $fasilitasumum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fasilitasumum  $fasilitasumum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fasilitasumum $fasilitasumum)
    {
        //
    }
}
