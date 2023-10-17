<?php

namespace App\Repositories;

use App\Models\Vente;

class VenteRepository
{
    protected $vente;

    public function __construct(Vente $vente)
    {
        $this->vente = $vente;
    }

    public function create(array $data)
    {
        return $this->vente->create($data);
    }

    public function update(Vente $vente, array $data)
    {
        $vente->update($data);
        return $vente;
    }

    public function delete(Vente $vente)
    {
        $vente->delete();
    }

    public function getAll()
    {
        return $this->vente->all();
    }

    public function find($id)
    {
        return $this->vente->find($id);
    }
}
