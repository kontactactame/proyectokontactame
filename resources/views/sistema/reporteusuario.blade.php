
@extends('index')
@section('contenido')
<h1>Reporte Usuario</h1>
<br>
<table border= 4>
<tr>
<td>Id_usuario</td><td>Nombre </td>
<td>Apellido Paterno</td><td>Apellido Materno</td><td>Archivo</td>
<td>Usuario</td><td>Contraseña</td><td> correo </td>
</tr>
@foreach($usuario as $ma)
<tr>
<td>{{$ma->id_usuario}}</td>
<td>{{$ma->nombre}}</td>
<td>{{$ma->apellido_paterno}}</td>
<td>{{$ma->apellido_materno}}</td>
<td><img src = "{{asset('archivos/'.$ma->archivo)}}"
        height =50 width=50>
    </td>
<td>{{$ma->archivo}}</td>
<td>{{$ma->nusuario}}</td>
<td>{{$ma->contrasena}}</td>
<td>{{$ma->correo}}</td>
<td>

</tr>
@endforeach

</table>
@stop


