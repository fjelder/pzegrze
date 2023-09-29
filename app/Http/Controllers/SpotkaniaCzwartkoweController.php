<?php

namespace App\Http\Controllers;

use App\Models\SpotkaniaCzwartkowe;
use App\Http\Requests\StoreSpotkaniaCzwartkoweRequest;
use App\Http\Requests\UpdateSpotkaniaCzwartkoweRequest;

class SpotkaniaCzwartkoweController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('spotkania-czwartkowe.index');
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
    public function store(StoreSpotkaniaCzwartkoweRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SpotkaniaCzwartkowe $spotkaniaCzwartkowe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SpotkaniaCzwartkowe $spotkaniaCzwartkowe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSpotkaniaCzwartkoweRequest $request, SpotkaniaCzwartkowe $spotkaniaCzwartkowe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SpotkaniaCzwartkowe $spotkaniaCzwartkowe)
    {
        //
    }
}
