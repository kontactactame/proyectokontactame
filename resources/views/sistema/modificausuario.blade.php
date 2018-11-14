@extends('index')


@section('contenido')
<form action =  "{{route('guardausuariomi')}}"  method = "POST" enctype='multipart/form-data' >                        
{{csrf_field()}}

@if($errors->first('id_usuario')) 
<i> {{ $errors->first('id_usuario') }} </i> 
@endif	<br>
        
Clave<input type = 'text' name = 'id_usuario' value="{{$usuario->id_usuario}}" readonly ='readonly'>
<br>
@if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif	<br>

Nombre<input type = 'text' name  ='nombre' value="{{$usuario->nombre}}">
<br>

@if($errors->first('apellido_paterno')) 
<i> {{ $errors->first('apellido_paterno') }} </i> 
@endif	<br>
apellido_paterno<input type  ='text' name ='apellido_paterno' value="{{$usuario->apellido_paterno}}">
<br>

@if($errors->first('apellido_materno')) 
<i> {{ $errors->first('apellido_materno') }} </i> 
@endif	<br>
apellido_materno<input type  ='text' name ='apellido_materno' value="{{$usuario->apellido_materno}}">
<br>
@if($errors->first('nusuario')) 
<i> {{ $errors->first('nusuario') }} </i> 
@endif	<br>
Usuario<input type  ='text' name ='nusuario' value="{{$usuario->nusuario}}">
<br>
@if($errors->first('contrasena')) 
<i> {{ $errors->first('contrasena') }} </i> 
@endif	<br>
contraseña<input type  ='text' name ='contrasena' value="{{$usuario->contrasena}}">
<br>
@if($errors->first('correo')) 
<i> {{ $errors->first('correo') }} </i> 
@endif	<br>
correo<input type  ='text' name ='correo' value="{{$usuario->correo}}">
<br>
@if($errors->first('archivo')) 
<i> {{ $errors->first('archivo') }} </i> 
@endif
<br>
<img src = "{{asset('archivos/'.$usuario->archivo)}}"
        height =100 width=100>
<br>
Seleccione foto<input type='file' name ='archivo'>
<BR>
<input type = 'submit' value = 'Guardar'>
</form>
@stop



















