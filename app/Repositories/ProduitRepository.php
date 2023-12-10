<?php

namespace App\Http\Repositories;

use App\Models\Produit;

class ProduitRepository
{
    protected $produit;

    public function __construct(Produit $produit)
    {
        $this->produit = $produit;
    }

    private function save(Produit $produit, array $inputs)
    {
        $produit->nom = $inputs['nom'];
        $produit->prix = $inputs['prix'];
        $produit->reference = $inputs['reference'];
        $produit->marque_id = $inputs['marque_id'];

        $produit->save();

        return $produit;
    }

    public function store(array $inputs)
    {
        $produit = new $this->produit;
        return $this->save($produit, $inputs);
    }

    public function update(Produit $produit, array $inputs)
    {
        return $this->save($produit, $inputs);
    }
}
