<?php

namespace App\Http\Controllers;

use App\Models\tevekenysegek;
use App\Models\kategoriak;
use App\Http\Requests\StoretevekenysegekRequest;
use App\Http\Requests\UpdatetevekenysegekRequest;

class TevekenysegekController extends Controller
{
    
    public function index()
    {
        return tevekenysegek::where('kat_id', kategoriak::id())
            ->with('id,kat_id,tev_nev,allapot')
            ->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store()
    {   
        kategoriak::where('id')->findOrFail($kat_id);
        $exists = tevekenysegek::where('kat_id', $kat_id);
        if(!$exists){
            return response()->json(['message' => 'Ezzel az id-val egyenlőre nem létezik kategória']);
        }
        return tevekenysegek::create([
            'id' => $id,
            'kat_id' => $kat_id,
            'tev_nev' => $tev_nev,
            'allapot' => $allapot
        ]);
    }

    

    /**
     * Display the specified resource.
     */
    public function show(tevekenysegek $tevekenysegek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tevekenysegek $tevekenysegek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetevekenysegekRequest $request, tevekenysegek $tevekenysegek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tevekenysegek $tevekenysegek)
    {
        $tevekenysegek = tevekenysegek::findOrFail($id);
    }
}
