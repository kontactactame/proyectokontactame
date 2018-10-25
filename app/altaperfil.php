<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class altaperfil extends Model
{
    protected $primaryKey = 'id_perfil';  
    protected $fillable=['id_perfil','oficio_prefesion','certificados','premios','especializacion','habilidades','contacto','correo'];
    protected $date=['deleted_at'];
}
g