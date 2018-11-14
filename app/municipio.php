<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class municipio extends Model
{
    protected $primaryKey = 'id_municipio';  
    protected $fillable=['id_municipio','nombre_m','estado','activo'];
       protected $date=['deleted_at'];
}
