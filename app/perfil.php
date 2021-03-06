<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class perfil extends Model
{

    use SoftDeletes;
    protected $primaryKey = 'id_perfil';  
    protected $fillable=['id_perfil','oficio_prefesion','certificados','premios','especializacion','habilidades','contacto','correo','archivo'];
       protected $date=['deleted_at'];
}
