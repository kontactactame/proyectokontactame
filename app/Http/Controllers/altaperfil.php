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
            
            ]);
            
            $per = new perfil;
            $per->id_perfil = $request->id_perfil;
            $per->oficio_profesion = $request->oficio_profesion;
            $per->certificados = $request->certificados;
            $per->premios =$request->premios;
            $per->especializacion= $request->especializacion;
            $per->habilidades=$request->habilidades;
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
	$perfil=perfil::orderBy('id_perfil','asc')
	          ->get();
	//return $maestros;
	  return view('sistema.reporte')
	  ->with('perfil',$perfil);  
		
           }
}
           