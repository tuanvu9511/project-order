<?php

namespace App\Http\Controllers;

use App\Models\infoCustumer;
use App\Http\Requests\StoreinfoCustumerRequest;
use App\Http\Requests\UpdateinfoCustumerRequest;

class InfoCustumerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return infoCustumer::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreinfoCustumerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(infoCustumer $infoCustumer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(infoCustumer $infoCustumer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateinfoCustumerRequest $request, infoCustumer $infoCustumer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(infoCustumer $infoCustumer)
    {
        //
    }
}
