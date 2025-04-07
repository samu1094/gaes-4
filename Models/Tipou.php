<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipou extends Model
{
    protected $table = 'res_tipou';
    protected $primaryKey = 'cod_tipo';
    protected $fillable = ['nom_tipo'];
}
