<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chambre extends Model
{
    use HasFactory;

    protected $table= 'chambre';

    protected $fillable = [
        'numero_chambre','client_id','type_chambre', 'statut'
    ];
    
    public function user()
    {
        return $this->belongsTo(client::class,'client_id');
    }
}
