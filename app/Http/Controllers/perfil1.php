<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\perfil;

class perfil1 extends Controller
{public function index()
	{
		return view('index');
	}
    
    public function vprincipal()
	{
		return view('sistema.principal');
	}
   
    public function altaperfill()
    {
     	 //select * from carreras     all()
		 //select * from carreras where activo = 'si'
	 //  group by nombre asc
		 
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
         'oficio_prefosion'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
         'certificados'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
         'premios'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
         'especializacion'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
         'habilidades'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
         'contacto'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
         'correo'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/']
         
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
        }
        