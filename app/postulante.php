<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class postulante extends Model
{
	use SoftDeletes;
       protected $primaryKey = 'id_postulante';  
    protected $fillable=['id_postulante','nombre','app','apm','usuario','contraseña'];
    protected $date=['deleted_at'];
}
