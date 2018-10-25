@extends('index')
@section('contenido')

		 
		
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Alta perfil
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="{{route('guardaperfil')}}" method="post" enctype='multipart/form-data'>
                                    {{csrf_field()}}
                                       
                                        <div class="form-group">
                                            <label>Clave perfil</label>
                                            <input class="form-control"  name = 'id_perfil' value="{{$idms}}">
                                            
                                        </div>  
                                        @if($errors->first('oficio_profesion')) 
                                        <i> {{ $errors->first('oficio_profesion') }} </i> 
                                        @endif	<br>
                                        <div class="form-group">
                                            <label>Oficiol</label>
                                            <input class="form-control"  type = 'text' name = 'oficio_profesion' value="{{old('oficio_profesion')}}">
                                          
                                        </div> 
                                        @if($errors->first('certificados')) 
                                        <i> {{ $errors->first('certificados') }} </i> 
                                        @endif	<br>
                                        <div class="form-group">
                                            <label>Certificados</label>
                                            <input class="form-control"  type = 'text' name  ='certificados' value="{{old('certificados')}}">
                                          
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