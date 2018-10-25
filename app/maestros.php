<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class maestros extends Model
{
   use SoftDeletes;
   protected $primaryKey = 'id_perfil';  
   protected $fillable=['id_perfil','certificados','premios','especializacion','habilidades','contacto','correo'];
   protected $date=['deleted_at'];
}
