<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    use HasFactory;
    public function produits() {
        return $this->hasMany(Produit::class);
    }
    public $timestamps = false;

    function produit()
    {
        return $this->belongsTo(Produit::class);
    }

}

