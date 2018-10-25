@extends('index')
@section('contenido')

		 
		
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <h1>  Alta usuario</h1>
                          <br>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="{{('guardausuario')}}" method="post" enctype='multipart/form-data'>
                                    {{csrf_field()}}
                                       
                                        <div class="form-group">
                                            <label>Clave usuario :</label>
                                            <input class="form-control"  name = 'id_usuario' value="{{$idusuario}}">
                                            
                                        </div>  
                                        @if($errors->first('nombre')) 
                                        <i> {{ $errors->first('nombre') }} </i> 
                                        @endif	<br>
                                        <div class="form-group">
                                            <label>Nombre :</label>
                                            <input class="form-control"  type = 'text' name = 'nombre' value="{{old('nombre')}}">
                                          
                                        </div> 
                                        @if($errors->first('apellido_paterno')) 
                                        <i> {{ $errors->first('apellido_paterno') }} </i> 
                                        @endif	<br>
                                        <div class="form-group">
                                            <label>Apellido paterno :</label>
                                            <input class="form-control"  type = 'text' name  ='apellido_paterno' value="{{old('apellido_paterno')}}">
                                          
                                        </div>  
                                        @if($errors->first('apellido_materno'))  
                                        <i> {{ $errors->first('apellido_materno') }} </i> 
                                        @endif	<br>
                                        <div class="form-group">
                                            <label>Apellido materno :</label>
                                            <input class="form-control"  type = 'text' name  ='apellido_materno' value="{{old('apellido_materno')}}">
                                          
                                        </div>
                                        @if($errors->first('nusuario')) 
                                        <i> {{ $errors->first('nusuario') }} </i> 
                                        @endif	<br>
                                        <div class="form-group">
                                            <label>Usuario :</label>
                                            <input class="form-control"  type = 'text' name  ='nusuario' value="{{old('nusuario')}}">
                                          
                                        </div> 
                                        @if($errors->first('contrasena')) 
                                        <i> {{ $errors->first('contrasena') }} </i> 
                                        @endif	<br>
                                        <div class="form-group">
                                            <label>Contraseña :</label>
                                            <input class="form-control"  type = 'password' name  ='contrasena' value="{{old('contrasena')}}">
                                          
                                        </div> 
                                       
                                        @if($errors->first('correo')) 
                                        <i> {{ $errors->first('correo') }} </i> 
                                        @endif	<br> 
                                        <div class="form-group">
                                            <label>Correo:</label>
                                            <input class="form-control"  type = 'text' name  ='correo' value="{{old('correo')}}">
                                          
                                        </div> 
                                        @if($errors->first('archivo')) 
                                            <i> {{ $errors->first('archivo') }} </i> 
                                            @endif	<br>
                                            Seleccione foto<input type='file' name ='archivo'>
                                            <BR>
                                       
                                        <button type="submit" class="btn btn-default">guardar</button>
                                       <a href="{!!URL::to('index')!!}" class="btn btn-default">Cancelar </a> 
                                          
                                       
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
           
			
			

            @stop