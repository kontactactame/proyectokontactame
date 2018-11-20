
@extends('index')
@section('contenido')
<h1>Reporte Postulante</h1>

<br>
<table border= 4>
<tr>
<table class="table table-hover">
 

<td>id postulante</td><td>nombre </td>
<td>Apellido Paterno</td><td>Apellido Materno</td>
<td>Usuario</td>
</tr>
@foreach($postulante as $ma)
<tr>
<td>{{$ma->id_postulante}}</td>
<td>{{$ma->nombre}}</td>
<td>{{$ma->app}}</td>
<td>{{$ma->apm}}</td>
<td>{{$ma->usuario}}</td><td>



<img src = "{{asset('archivos/'.$ma->archivo)}}"
        height =50 width=50>
    </td>
<td>{{$ma->oficio_profecion}}</td>
<td>{{$ma->cp}}</td>

<td>
@if($ma->deleted_at=="")
    <a  class="btn btn-default" href="{{URL::action('postulantec@eliminausuario',['id_postulante'=>$ma->id_postulante])}}"> 
	Inhabilitar 
	</a> 
   <a class="btn btn-default" href="{{URL::action('postulantec@modificam1',['id_postulante'=>$ma->id_postulante])}}"> 
   Modificar</a>
@else
<a  class="btn btn-default" href="{{URL::action('postulantec@restauraf',['id_postulante'=>$ma->id_postulante])}}"> 
	Restaurar  
	</a> 
       <a  class="btn btn-default" href="{{URL::action('postulantec@deletel',['id_postulante'=>$ma->id_postulante])}}">  
	Eliminar 
	</a> 
	
@endif
</td>
</tr>
@endforeach

</table>
@stop


