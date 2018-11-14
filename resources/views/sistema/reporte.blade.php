
@extends('index')
@section('contenido')
<h1>Reporte perfiles</h1>
<br>
<table border= 4>
<table  class="table table-hover">

<tr>
<td>Id perfil</td><td>Oficio / Profecion</td>
<td>Certificados</td><td>Premios</td><td>Especializacion</td>
<td>Habilidades</td><td>contacto</td><td>Correo</td><td>Archivo</td>
</tr>
@foreach($perfil as $ma)
<tr>
<td>{{$ma->id_perfil}}</td>
<td>{{$ma->oficio_profesion}}</td>
<td>{{$ma->certificados}}</td>
<td>{{$ma->premios}}</td>
<td>{{$ma->especializacion}}</td>
<td>{{$ma->habilidades}}</td>
<td>{{$ma->contacto}}</td>
<td>{{$ma->correo}}</td>
<td><img src = "{{asset('archivos/'.$ma->archivo)}}"
        height =50 width=50>
    </td>

<td>{{$ma->oficio_profecion}}</td>
<td>{{$ma->cp}}</td>
<td>
@if($ma->deleted_at=="")
   <a  class="btn btn-default" href=""> 
	Inhabilitar 
	</a> 
   <a class="btn btn-default" href="{{URL::action('altaperfil@modificam',['id_perfil'=>$ma->id_perfil])}}"> 
   Modificar</a>
@else
<a  class="btn btn-default" href=""> 
	Restaurar  
	</a> 
    <a  class="btn btn-default" href="">  
	Eliminar 
	</a> 
	
@endif
</td>
</tr>
@endforeach

</table>

@stop


