
@extends('sistema.principal')



@section('contenido')

<h1>Alta perfil</h1>
<br>
<form action =  "{{route('guardaperfil')}}" method = "POST" enctype='multipart/form-data' >                        
{{csrf_field()}}

@if($errors->first('id_perfil')) 
<i> {{ $errors->first('id_perfil') }} </i> 
@endif	<br>
        
Clave<input type = 'text' name = 'id_perfil' value="{{$idms}}" >
<br>
@if($errors->first('oficio_profesion')) 
<i> {{ $errors->first('oficio_profesion') }} </i> 
@endif	<br>

OFICIO / PROFESION<input type = 'text' name  ='oficio_profesion' value="{{old('oficio_profesion')}}">
<br>
@if($errors->first('certificados')) 
<i> {{ $errors->first('certificados') }} </i> 
@endif	<br>

Certificados<input type = 'text' name  ='certificados' value="{{old('certificados')}}">
<br>

@if($errors->first('premios')) 
<i> {{ $errors->first('premios') }} </i> 
@endif	<br>
Premios<input type  ='text' name ='premios' value="{{old('premios')}}">
<br>
@if($errors->first('especializacion')) 
<i> {{ $errors->first('especializacion') }} </i> 
@endif	<br>
Especializacion<input type  ='text' name ='especializacion' value="{{old('especializacion')}}">
<br>
@if($errors->first('habilidades')) 
<i> {{ $errors->first('habilidades') }} </i> 
@endif	<br>
Habilidades<input type  ='text' name ='habilidades' value="{{old('habilidades')}}">
<br>
@if($errors->first('contacto')) 
<i> {{ $errors->first('contacto') }} </i> 
@endif	<br>
Contacto<input type  ='text' name ='contacto' value="{{old('contacto')}}">
<br>
@if($errors->first('correo')) 
<i> {{ $errors->first('correo') }} </i> 
@endif	<br>
Correo<input type  ='text' name ='correo' value="{{old('correo')}}">
<br>

<input type = 'submit' value = 'Guardar'>
</form>

@stop