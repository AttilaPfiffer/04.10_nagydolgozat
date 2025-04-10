<?php

namespace App\Http\Controllers;

use App\Models\Tevekenysegek;
use Illuminate\Http\Request;

class TevekenysegekController extends Controller
{
    public function index() {
        $tevekenysegek = Tevekenysegek::all();

        return view('tevekenyseg', compact('tevekenysegek'));
    }

    public function destroy($id) {
        $tevDel = Tevekenysegek::findOrFail($id);
        $tevDel->delete();
        return redirect()->back()->with('success2', 'Tevekenyseg sikeresen törölve.');
    }

    public function felvitel(Request $request) {
        $validated = $request->validate([
            'kat_id' => 'required',
            'tev_nev' => 'required',
            'allapot' => 'required'
        ]);

        Tevekenysegek::create($validated);

    }
}
