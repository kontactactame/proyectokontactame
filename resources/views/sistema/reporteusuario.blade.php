
@extends('index')
@section('contenido')
<h1>Reporte Usuario</h1>
<br>
<table border= 4>
<tr>
<table class="table table-hover">
 
<td>Id_usuario</td><td>Nombre </td>
<td>Apellido Paterno</td><td>Apellido Materno</td><td>Archivo</td>
<td>Usuario</td><td> Correo </td>
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

<td>{{$ma->nusuario}}</td>
<td>{{$ma->correo}}</td>
<td>
<td>
@if($ma->deleted_at=="")
   <a  class="btn btn-default" href="{{URL::action('curso@eliminam',['idm'=>$ma->idm])}}"> 
	Inhabilitar 
	</a> 
   <a class="btn btn-default" href="{{URL::action('curso@modificam',['idm'=>$ma->idm])}}"> 
   Modificar</a>
@else
	 <a href="{{URL::action('curso@restauram',['idm'=>$ma->idm])}}"> 
	Restaurar  
	</a> 
    <a href="{{URL::action('curso@efisicam',['idm'=>$ma->idm])}}"> 
	Eliminar 
	</a> 
@endif
</td>

</tr>
@endforeach

</table>
@stop


