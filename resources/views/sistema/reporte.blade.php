
@extends('index')
@section('contenido')
<h1>Reporte perfiles</h1>
<br>
<table border= 4>
<table class="table table-hover">
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
   <a href="{{URL::action('curso@eliminam',['idm'=>$ma->idm])}}"> 
	Inhabilitar 
	</a> 
   <a href="{{URL::action('curso@modificam',['idm'=>$ma->idm])}}"> 
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


