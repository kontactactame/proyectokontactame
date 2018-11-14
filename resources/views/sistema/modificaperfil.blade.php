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
                                    <form role="form" action= "{{route('guardamodificam')}}"  method = "POST" enctype='multipart/form-data' >                        
{{csrf_field()}}
                                       
                                        <div class="form-group">
                                            <label>Clave perfil:</label>
                                            <input class="form-control"  name = 'id_perfil' value="{{$perfil->id_perfil}}" readonly ='readonly'>
                                            
                                        </div>  
                                        @if($errors->first('oficio_profesion')) 
                                        <i> {{ $errors->first('oficio_profesion') }} </i> 
                                        @endif	<br>
                                        <div class="form-group">
                                            <label>Oficio:</label>
                                            <input class="form-control"  type = 'text' name = 'oficio_profesion' value="{{$perfil->oficio_profesion}}">
                                          
                                        </div> 
                                        @if($errors->first('certificados')) 
                                        <i> {{ $errors->first('certificados') }} </i> 
                                        @endif	<br>
                                        <div class="form-group">
                                            <label>Certificados:</label>
                                            <input class="form-control"  type = 'text' name  ='certificados' value="{{$perfil->certificados}}">
                                          
                                        </div>  
                                        @if($errors->first('premios'))  
                                        <i> {{ $errors->first('premios') }} </i> 
                                        @endif	<br>
                                        <div class="form-group">
                                            <label>Premios:</label>
                                            <input class="form-control"  type = 'text' name  ='premios' value="{{$perfil->premios}}">
                                          
                                        </div>
                                        @if($errors->first('especializacion')) 
                                        <i> {{ $errors->first('especializacion') }} </i> 
                                        @endif	<br> 
                                        <div class="form-group">
                                            <label>Especializacion:</label>
                                            <input class="form-control"  type = 'text' name  ='especializacion' value="{{$perfil->especializacion}}">
                                          
                                        </div> 
                                        @if($errors->first('habilidades')) 
                                        <i> {{ $errors->first('habilidades') }} </i> 
                                        @endif	<br>
                                        <div class="form-group">
                                            <label>Habilidades:</label>
                                            <input class="form-control"  type = 'text' name  ='habilidades' value="{{$perfil->habilidades}}">
                                          
                                        </div> 
                                        @if($errors->first('contacto')) 
                                        <i> {{ $errors->first('contacto') }} </i> 
                                        @endif	<br>
                                        <div class="form-group">
                                            <label>Contacto:</label>
                                            <input class="form-control"  type = 'text' name  ='contacto' value="{{$perfil->contacto}}">
                                          
                                        </div>
                                        @if($errors->first('correo')) 
                                        <i> {{ $errors->first('correo') }} </i> 
                                        @endif	<br> 
                                        <div class="form-group">
                                            <label>Correo:</label>
                                            <input class="form-control"  type = 'text' name  ='correo' value="{{$perfil->correo}}">
                                          
                                        </div> 
                                        @if($errors->first('archivo')) 
                                            <i> {{ $errors->first('archivo') }} </i> 
                                            @endif	<br>
                                            <img src = "{{asset('archivos/'.$perfil->archivo)}}"
        height =100 width=100> <br>
                                            Seleccione foto<input type='file' name ='archivo'>
                                            <BR><BR>
                                       <center>
                                        <button type="submit" class="btn btn-default">guardar</button>
                                       <a href="{!!URL::to('index')!!}" class="btn btn-default">Cancelar </a> 
                                       </center>
                                       
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