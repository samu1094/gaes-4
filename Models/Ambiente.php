<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ambiente extends Model
{
    protected $table = 'res_ambiente';
    protected $primaryKey = 'cod_amb';
    protected $fillable = [
        'nom_amb', 
        'capacidad_amb', 
        'piso_amb'
                        ];
    
    public $timestamps = false;
    
}
