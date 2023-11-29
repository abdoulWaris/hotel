<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;
 protected $table = 'reservation';

    protected $fillable = [
        'client_id',
        'chambre_id',
        'description',
        'date_deb',
        'date_fin',
    ];
     
    public function client()
    {
        return $this->belongsTo(client::class,'client_id');
    }
    public function chambre()
    {
        return $this->belongsTo(chambre::class,'chambre_id');
    }
    
}
