<?php

namespace App\Http\Repositories;

use App\Models\Vente;

class VenteRepository
{
    protected $vente;

    public function __construct(Vente $vente)
    {
        $this->vente = $vente;
    }

    private function save(Vente $vente, array $inputs)
    {
        $vente->quantite = $inputs['quantite'];
        $vente->produit_id = $inputs['produit_id'];
        $vente->heure = $inputs['heure'];
        $vente->date = $inputs['date'];

        $vente->save();

        return $vente;
    }

    public function store(array $inputs)
    {
        $vente = new $this->vente;
        return $this->save($vente, $inputs);
    }

    public function update(Vente $vente, array $inputs)
    {
        return $this->save($vente, $inputs);
    }
}
