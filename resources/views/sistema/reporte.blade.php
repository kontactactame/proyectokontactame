
@extends('index')
@section('contenido')
<h1>Reporte perfiles</h1>
<br>
<table border= 4>
<table  class="table table-hover">

<tr>
<td>id perfil</td><td>oficio y profecion</td>
<td>certificados</td><td>premios</td><td>especializacion</td>
<td>habilidades</td><td>contacto</td><td>correo</td>
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
<a  class="btn btn-default" href="{{URL::action('altaperfil@eliminaperfil',['id_perfil'=>$ma->id_perfil])}}"> 
	Inhabilitar 
	</a> 
   <a class="btn btn-default" href="{{URL::action('altaperfil@modificam',['id_perfil'=>$ma->id_perfil])}}"> 
   Modificar</a>
@else
<a  class="btn btn-default" href="{{URL::action('altaperfil@restaurap',['id_perfil'=>$ma->id_perfil])}}"> 
	Restaurar  
	</a> 
   <a  class="btn btn-default" href="{{URL::action('altaperfil@deletep',['id_perfil'=>$ma->id_perfil])}}"> 
	Eliminar  
	</a> 
	
@endif
</td>
</tr>
@endforeach

</table>

@stop


