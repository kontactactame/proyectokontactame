@extends('index')
@section('contenido')

		 
		
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Alta postulante  
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="{{route('guardapostulantei')}}" method="POST" enctype='multipart/form-data'>
                                    {{csrf_field()}}
                                       
                                        <div class="form-group">
                                            <label>Clave perfil</label>
                                            <input class="form-control"  name = 'id_postulante' value="{{$idms}}">
                                            
                                        </div>  
                                        @if($errors->first('nombre')) 
                                        <i> {{ $errors->first('nombre') }} </i> 
                                        @endif	<br>
                                        <div class="form-group">
                                            <label>nombre</label>
                                            <input class="form-control"  type = 'text' name = 'nombre' value="{{old('nombre')}}">
                                          
                                        </div> 
                                        @if($errors->first('app')) 
                                        <i> {{ $errors->first('app') }} </i> 
                                        @endif	<br>
                                        <div class="form-group">
                                            <label>apellido paterno</label>
                                            <input class="form-control"  type = 'text' name  ='app' value="{{old('app')}}">
											</div> 
                                        @if($errors->first('apm')) 
                                        <i> {{ $errors->first('apm') }} </i> 
                                        @endif	<br>
                                        <div class="form-group">
                                            <label>apellido materno</label>
                                            <input class="form-control"  type = 'text' name  ='apm' value="{{old('apm')}}">
											</div> 
                                        @if($errors->first('usuario')) 
                                        <i> {{ $errors->first('usuario') }} </i> 
                                        @endif	<br>
                                        <div class="form-group">
                                            <label>usuario</label>
                                            <input class="form-control"  type = 'text' name  ='usuario' value="{{old('usuario')}}">
											</div> 
                                        @if($errors->first('contraseña')) 
                                        <i> {{ $errors->first('contraseña') }} </i> 
                                        @endif	<br>
                                        <div class="form-group">
                                            <label>apellido materno</label>
                                            <input class="form-control"  type = 'text' name  ='contraseña' value="{{old('contraseña')}}">
											
                                          
                                        </div>  
                                       
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