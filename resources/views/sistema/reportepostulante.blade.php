
@extends('index')
@section('contenido')
<h1>Reporte Postulante</h1>
<br>
<table border= 4>
<tr>
<td>id postulante</td><td>nombre </td>
<td>Apellido Paterno</td><td>Apellido Materno</td><td></td>
<td>Usuario</td><td>Contraseña</td>
</tr>
@foreach($postulante as $ma)
<tr>
<td>{{$ma->id_postulante}}</td>
<td>{{$ma->nombre}}</td>
<td>{{$ma->app}}</td>
<td>{{$ma->usuario}}</td>
<td>{{$ma->contraseña}}</td>
<td><img src = "{{asset('archivos/'.$ma->archivo)}}"
        height =50 width=50>
    </td>

<td>{{$ma->oficio_profecion}}</td>
<td>{{$ma->cp}}</td>
<td>
@if($ma->deleted_at=="")
   <a href="{{URL::action('curso@eliminam',['idm'=>$ma->idm])}}"> 
	Inhabilitar 
	</a> 
   <a href="{{URL::action('curso@modificam',['idm'=>$ma->idm])}}"> 
   Modificar</a>
@else
	 <a href="{{URL::action('curso@restauram',['idm'=>$ma->idm])}}"> 
	Restaurar  Usuario
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


