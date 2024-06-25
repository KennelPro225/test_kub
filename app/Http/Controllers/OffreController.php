<?php

namespace App\Http\Controllers;

use App\Http\Requests\OffreStoreRequest;
use App\Models\Offre;
use Illuminate\Http\Request;

class OffreController extends Controller
{
    public function index()
    {
        $offres = Offre::all();
        return view('offres.index', compact('offres'));
    }

    public function create()
    {
        return view('dashboard');
    }

    public function store(OffreStoreRequest $request) {
        // dd($request->all());
        $validated = $request->validated();
        $offre = new Offre();
        $offre->intitule = $validated['intitule'];
        $offre->description = $validated['description'];
        $offre->date_fin = $validated['date_fin'];
        $offre->ville = $validated['ville'];
        $offre->pays_id = $validated['pays_id'];
        $offre->type_contrat = $validated['type_contrat'];
        $offre->salaire = $validated['salaire'];
        $offre->entreprise = $validated['entreprise'];
        $offre->user_id = auth()->id();
        $offre->save();
        return redirect()->route('dashboard');
    }

    public function show(Request $request)
    {
        $offre = Offre::find($request->id);
        return view('dashboard', compact('offre'));
    }
}
