<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class facture extends Model
{
    use HasFactory;

    //protected $table="facture";

    protected $fillable = [
        '','montant','statut','montantRestant','description',
    ];
    
    public function chambre()
    {
        return $this->belongsTo(chambre::class,'chambre_id');
    }
}