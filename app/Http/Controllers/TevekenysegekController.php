<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tevekenysegek;
use App\Models\kategoriak;
use App\Http\Requests\StoretevekenysegekRequest;
use App\Http\Requests\UpdatetevekenysegekRequest;

class TevekenysegekController extends Controller
{
    
    public function index($id)
    {
        return response()->json(
            tevekenysegek::query()
                ->select(['id', 'kat_id', 'tev_nev', 'allapot'])
                ->where('kat_id', $id)
                ->orderBy('id', 'desc') //asc
                ->get()
        );
    }

    public function byKategoriak($id)
    {
        return response()->json(
            tevekenysegek::query()
                ->select(['id', 'kat_id', 'tev_nev', 'allapot'])
                ->where('kat_id', $id)
                ->orderBy('id', 'desc')
                ->get()
        );
    }

    
    public function store(Request $request)
    {
        $data = $request->validate([
            'kat_id' => ['required', 'integer'],
            'tev_nev' => ['required', 'string', 'max:255'],
        ]);

        $todo = tevekenysegek::create([
            'kat_id' => $data['kat_id'],
            'tev_nev' => $data['tev_nev'],
            'allapot' => '0', // 0 = nincs kész
        ]);

        return response()->json($todo, 201);
    }

    

    public function update(Request $request, $id)
    {
        $todo = tevekenysegek::findOrFail($id);

        // két módot engedünk:
        // - ha küldesz allapot-ot, beállítjuk
        // - ha nem küldesz, akkor toggle-oljuk
        $validated = $request->validate([
            'allapot' => ['nullable', 'in:0,1,"0","1"'],
            'tev_nev' => ['nullable', 'string', 'max:255'],
            'kat_id' => ['nullable', 'integer'],
        ]);

        if (array_key_exists('allapot', $validated)) {
            $todo->allapot = (string)$validated['allapot'];
        } else {
            $todo->allapot = $todo->allapot === '1' ? '0' : '1';
        }

        if (array_key_exists('tev_nev', $validated)) {
            $todo->tev_nev = $validated['tev_nev'];
        }
        if (array_key_exists('kat_id', $validated)) {
            $todo->kat_id = $validated['kat_id'];
        }

        $todo->save();

        return response()->json($todo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $todo = tevekenysegek::findOrFail($id);
        $todo->delete();

        return response()->json(['message' => 'deleted']);
    }
}
