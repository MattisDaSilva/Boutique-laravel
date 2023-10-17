<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Auth;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->can('produit-index')) {
            $produits = Produit::all();
            return view('produit.index', compact('produits'));
        }

        abort(401);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->can('produit-create')) {
            return view('produit.create');
        }

        abort(401);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $produit = new Produit();

        $produit->nom = $data['nom'];
        $produit->reference = $data['reference'];
        $produit->prix = $data['prix'];
        $produit->marque_id = $data['marque_id'];

        $produit->save();

        return redirect()->route('produit.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {
        if (Auth::user()->can('produit-create')) {
            $produits = produit::all();
            return view('produit.edit', compact('produit'));
        }
        abort(401);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produit $produit)
    {
        $data = $request->all();

        $produit->nom = $data['nom'];
        $produit->reference = $data['reference'];
        $produit->prix = $data['prix'];
        $produit->marque_id = $data['marque_id'];

        $produit->save();

        return redirect()->route('produit.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();

        return redirect()->route('produit.index')->with('success', 'produit supprimé avec succès !');
    }
}
