<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class usuario extends Model
{
    protected $primaryKey = 'id_usuario';  
    protected $fillable=['id_usuario','nombre','apellido_paterno','apellido_materno','archivo','usuario','contrasena','correo','archivo'];
    protected $date=['deleted_at']; 
}
