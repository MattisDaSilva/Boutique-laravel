<?php

namespace App\Http\Controllers;

use App\Mail\InfoMail;
use Mail;
use User;
use App\Models\Produit;
use App\Models\Vente;
use Illuminate\Http\Request;
use Auth;
use App\Http\Repositories\VenteRepository;
use App\Http\Requests\VenteRequest;


class VenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     private $repository;

    public function index()
    {
        if (Auth::user()->can('vente-index')) {
            $ventes = Vente::all();
            return view('vente.index', compact('ventes'));
        }

        abort(401);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->can('vente-create')) {
            return view('vente.create');
        }
        abort(401);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VenteRequest $request)
    {

        $vente = $this->repository->store($request->all());

        $mail=Auth::user()->email;
        Mail::to($mail)->send(new InfoMail($vente));

        return redirect()->route('vente.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vente $vente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vente $vente)
    {
        if (Auth::user()->can('vente-create')) {
            $ventes = Vente::all();
            return view('vente.edit', compact('vente'));
        }
        abort(401);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vente $vente)
    {
        $data = $request->all();

        $vente->produit_id = $data['produit_id'];
        $vente->quantite = $data['quantite'];


        $vente->save();

        return redirect()->route('vente.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vente $vente)
    {
        $vente->delete();

        return redirect()->route('vente.index')->with('success', 'vente supprimée avec succès !');
    }

    public function __construct(VenteRepository $repository)
    {
        $this->repository = $repository;
    }

}
