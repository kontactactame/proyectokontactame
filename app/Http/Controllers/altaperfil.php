<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\perfil;

class altaperfil extends Controller
{
    public function altaperfil()
    {
        $clavequesigue =perfil::orderBy('id_perfil','desc')->take(1)->get();
        $idms = $clavequesigue[0]->id_perfil+1;
   
           return view ("sistema.altaperfil")->with(['idms'=>$idms]);
       }
       
       public function guardaperfil(Request $request)
       {
           $oficio_profesion =  $request->oficio_profesion;
           $certificados = $request->certificados;
           $premios = $request->premios;
           $especializacion = $request->especializacion;
           $habilidades = $request->habilidades;
           $contacto = $request->contacto;
           $correo = $request->correo;
           
            $this->validate($request,[
            'id_perfil'=>'required|numeric',
            'oficio_profesion'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'certificados'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'premios'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'especializacion'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'habilidades'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'contacto'=>['regex:/^[0-9]{10}$/'],
            'correo'=>'required|email|max:255',
			 'archivo'=>'image|mimes:jpeg,png,gif'
	     ]);
		 
     $file = $request->file('archivo');
	 if($file!="")
	 {	 
	 $ldate = date('Ymd_His_');
	 $img = $file->getClientOriginalName();
	 $img2 = $ldate.$img;
	 \Storage::disk('local')->put($img2, \File::get($file));
	 }
	 else
     {
	 $img2= 'sinfoto.png';
	 }
            
            $per = new perfil;
            $per->id_perfil = $request->id_perfil;
            $per->oficio_profesion = $request->oficio_profesion;
            $per->certificados = $request->certificados;
            $per->premios =$request->premios;
            $per->especializacion= $request->especializacion;
            $per->habilidades=$request->habilidades;
			$per->archivo = $img2;
            $per->contacto=$request->contacto;
            $per->correo=$request->correo;
            $per->save();
            $proceso = "ALTA DE MAESTRO";
            $mensaje = "REgistro guardado correctamente";
            return view ('sistema.mensaje')
            ->with('proceso',$proceso)
            ->with('mensaje',$mensaje);
            }

			 public function reporteperfilf()
	{
        
	$perfil=perfil::withTrashed()->orderBy('id_perfil','asc')
	          ->get();
	//return $maestros;
	  return view('sistema.reporte')
	  ->with('perfil',$perfil);  
		
           }
           public function modificam($id_perfil)
	{
		$perfil = perfil::where('id_perfil','=',$id_perfil)
		                     ->get();
        
         $id_perfil = $perfil[0]->id_perfil;
		//return $carrera;
		//return $perfil;
		return view ('sistema.modificaperfil')
		->with('perfil',$perfil[0]);
	    
	}

public function guardamodificam(Request $request)
       {
        $id_perfil = $request->id_perfil;
           $oficio_profesion =  $request->oficio_profesion;
           $certificados = $request->certificados;
           $premios = $request->premios;
           $especializacion = $request->especializacion;
           $habilidades = $request->habilidades;
           $contacto = $request->contacto;
           $correo = $request->correo;
           
            $this->validate($request,[
            'id_perfil'=>'required|numeric',
            'oficio_profesion'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'certificados'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'premios'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'especializacion'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'habilidades'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'contacto'=>['regex:/^[0-9]{10}$/'],
            'correo'=>'required|email|max:255',
			 'archivo'=>'image|mimes:jpeg,png,gif'
	     ]);
		 
     $file = $request->file('archivo');
	 if($file!="")
	 {	 
	 $ldate = date('Ymd_His_');
	 $img = $file->getClientOriginalName();
	 $img2 = $ldate.$img;
	 \Storage::disk('local')->put($img2, \File::get($file));
	 }
	  
            $per = perfil::find($id_perfil);
            $per->id_perfil = $request->id_perfil;
            $per->oficio_profesion = $request->oficio_profesion;
            $per->certificados = $request->certificados;
            $per->premios =$request->premios;
            $per->especializacion= $request->especializacion;
            $per->habilidades=$request->habilidades;
            if($file!="")
	        {	
			$per->archivo = $img2;
	        }
            $per->contacto=$request->contacto;
            $per->correo=$request->correo;
            $per->save();
            $proceso = "MODIFICA DE PERFIL";
            $mensaje = "Rgistro guardado correctamente";
            return view ('sistema.mensaje')
            ->with('proceso',$proceso)
            ->with('mensaje',$mensaje);
            }
            public function eliminaperfil($id_perfil)
            {
                  perfil::find($id_perfil)->delete();
                    $proceso = "ELIMINAR PERFIL";
                    $mensaje = "Ha sido desactivado Correctamente";
                    return view ('sistema.mensaje')
                    ->with('proceso',$proceso)
                    ->with('mensaje',$mensaje);
            }
            public function restaurap($id_perfil)
            {
            perfil::withTrashed()->where('id_perfil',$id_perfil)->restore();
        $proceso = "RESTAURACION DE PERFIL";	
        $mensaje="Registro restaurado correctamente";
        return view('sistema.mensaje')
        ->with('proceso',$proceso)
        ->with('mensaje',$mensaje);
            }
             public function deletep($id_perfil)
            {
                
           perfil::withTrashed()->where('id_perfil',$id_perfil)->forceDelete();
        $proceso = "ELIMINACION FISICA DE usuario";	
        $mensaje="Registro eliminado del sistema correctamente";
        return view('sistema.mensaje')
        ->with('proceso',$proceso)
        ->with('mensaje',$mensaje);
            }
        
        }
           