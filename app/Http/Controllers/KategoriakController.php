<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\kategoriak;
use App\Models\tevekenysegek;
use App\Http\Requests\StorekategoriakRequest;
use App\Http\Requests\UpdatekategoriakRequest;

class KategoriakController extends Controller
{
    
    public function index()
    {
        return kategoriak::with('id,katnev')
            ->select('id', 'katnev')
            ->findOrFail($id);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return kategoriak::create([
            'id' => $id,
            'katnev'=> $katnev,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorekategoriakRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(kategoriak $kategoriak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kategoriak $kategoriak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatekategoriakRequest $request, kategoriak $kategoriak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kategoriak $kategoriak)
    {
        //
    }
}
