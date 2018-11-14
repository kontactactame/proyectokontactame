@extends('index')
@section('contenido')
<div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <h1 align="center">  Alta perfil </h1>
                          <br>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<form action =  "{{route('guardamodificamu')}}"  method = "POST" enctype='multipart/form-data' >                        
{{csrf_field()}}

@if($errors->first('id_usuario')) 
<i> {{ $errors->first('id_usuario') }} </i> 
@endif	<br>
<div class="form-group"> 
<label>Clave </label>
<input  class="form-control"  type = 'text' name = 'id_usuario' value="{{$usuario->id_usuario}}" readonly ='readonly'>
</div>
<br>
@if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif	<br>
<div class="form-group"> 
<label>Nombre</label>
<input class="form-control" type = 'text' name  ='nombre' value="{{$usuario->nombre}}">
</div>
<br>

@if($errors->first('apellido_paterno')) 
<i> {{ $errors->first('apellido_paterno') }} </i> 
@endif	<br>
<div class="form-group">
<label>apellido_paterno</label>
<input class="form-control" type  ='text' name ='apellido_paterno' value="{{$usuario->apellido_paterno}}">
</div>
<br>


@if($errors->first('apellido_materno')) 
<i> {{ $errors->first('apellido_materno') }} </i> 
@endif	<br>
<div class="form-group">
<label>apellido_materno </label>
<input class="form-control" type  ='text' name ='apellido_materno' value="{{$usuario->apellido_materno}}">
</div>
<br>
@if($errors->first('nusuario')) 
<i> {{ $errors->first('nusuario') }} </i> 
@endif	<br>
<div class="form-group">
<label>Usuario</label>
<input  class="form-control" type  ='text' name ='nusuario' value="{{$usuario->nusuario}}">
<br>
@if($errors->first('contrasena')) 
<i> {{ $errors->first('contrasena') }} </i> 
@endif	<br>
<div class="form-group">
<label>contraseña</label>
<input class="form-control" type  ='text' name ='contrasena' value="{{$usuario->contrasena}}">
<br>
@if($errors->first('correo')) 
<i> {{ $errors->first('correo') }} </i> 
@endif	<br>
<div class="form-group">

<label>correo</label>
<input  class="form-control" type  ='text' name ='correo' value="{{$usuario->correo}}">
<br>
@if($errors->first('archivo')) 
<i> {{ $errors->first('archivo') }} </i> 
@endif
<br>
<img  src = "{{asset('archivos/'.$usuario->archivo)}}"
        height =100 width=100>
<br>
Seleccione foto<input type='file' name ='archivo'>
<BR>
<input type = 'submit' value = 'Guardar'>
</form>
@stop



















