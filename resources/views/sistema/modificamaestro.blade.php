@extends('sistema.principal')


@section('contenido')
<form action =  "{{route('guardamodificam')}}"  method = "POST" enctype='multipart/form-data' >                        
{{csrf_field()}}

@if($errors->first('idm')) 
<i> {{ $errors->first('idm') }} </i> 
@endif	<br>
        
Clave<input type = 'text' name = 'idm' value="{{$maestro->idm}}" readonly ='readonly'>
<br>
@if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif	<br>

Nombre<input type = 'text' name  ='nombre' value="{{$maestro->nombre}}">
<br>

@if($errors->first('edad')) 
<i> {{ $errors->first('edad') }} </i> 
@endif	<br>
Edad<input type  ='text' name ='edad' value="{{$maestro->edad}}">
<br>

@if($maestro->sexo=='M') 
Sexo<input type = 'radio' name = 'sexo' value = 'M' checked>M
<input type = 'radio' name = 'sexo' value = 'F'>F
<br>
@else
Sexo<input type = 'radio' name = 'sexo' value = 'M' >M
<input type = 'radio' name = 'sexo' value = 'F'checked>F
<br>
@endif

@if($errors->first('cp')) 
<i> {{ $errors->first('cp') }} </i> 
@endif	<br>

Codigo Postal <input type = 'text'name = 'cp' value="{{$maestro->cp}}" >
<br>
@if($errors->first('beca')) 
<i> {{ $errors->first('beca') }} </i> 
@endif	<br>

Beca <input type = 'text'name = 'beca' value="{{$maestro->beca}}" >
<br>
Seleccione carrera<select name = 'idc'>
      <option value = '{{$idc}}'>{{$carrera}}</option>
	  @foreach($otrascarreras as $oc)
	   <option value = '{{$oc->idc}}'>{{$oc->nombre}}</option>
	  @endforeach
      </select>
<br>

@if($errors->first('archivo')) 
<i> {{ $errors->first('archivo') }} </i> 
@endif
<br>
<img src = "{{asset('archivos/'.$maestro->archivo)}}"
        height =100 width=100>
<br>
Seleccione foto<input type='file' name ='archivo'>
<BR>
<input type = 'submit' value = 'Guardar'>
</form>
@stop



















