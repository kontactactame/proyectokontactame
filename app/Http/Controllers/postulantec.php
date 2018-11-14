<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\postulante;
class postulantec extends Controller
{
    public function altapostulantef()
    {
        $clavequesigue =postulante::orderBy('id_postulante','desc')->take(1)->get();
        $idms = $clavequesigue[0]->id_postulante+1;
   
           return view ("altapostulantev")->with(['idms'=>$idms]);
       }
       
       public function guardapostulantef(Request $request)
       {
           $nombre =  $request->nombre;
           $app = $request->app;
           $apm = $request->apm;
           $usuario = $request->usuario;
           $contraseña = $request->contraseña;
           
            $this->validate($request,[
            'id_postulante'=>'required|numeric',
            'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'app'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'apm'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'usuario'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'contraseña'=>'required|numeric'
           
            
            ]);
            
            $per = new postulante;
            $per->id_postulante = $request->id_postulante;
            $per->nombre = $request->nombre;
            $per->app = $request->app;
            $per->apm =$request->apm;
            $per->usuario= $request->usuario;
            $per->contraseña=$request->contraseña;
 
            $per->save();
            $proceso = "ALTA DE MAESTRO";
            $mensaje = "REgistro guardado correctamente";
            return view ('sistema.mensaje')
            ->with('proceso',$proceso)
            ->with('mensaje',$mensaje);
            }
			 public function reportepostulantef()
	{
	$postulante=postulante::orderBy('id_postulante','asc')
	          ->get();
	//return $maestros;
	  return view('sistema.reportepostulante')
	  ->with('postulante',$postulante);  
}
public function modificam1($id_postulante)
	{
		$postulante = postulante::where('id_postulante','=',$id_postulante)
		                     ->get();
        
         $id_postulante = $postulante[0]->id_postulante;
		//return $carrera;
		//return $perfil;
		return view ('modificapostulante')
		->with('postulante',$postulante[0]);
	    
	}

public function guardamodificam1(Request $request)
       {
          $id_postulante = $request->id_postulante;
          $nombre =  $request->nombre;
           $app = $request->app;
           $apm = $request->apm;
           $usuario = $request->usuario;
           $contraseña = $request->contraseña;
           
            $this->validate($request,[
            'id_postulante'=>'required|numeric',
            'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'app'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'apm'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'usuario'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'contraseña'=>'required|numeric'
           
            
            ]);
            
            $per = postulante::find($id_postulante);
            $per->id_postulante = $request->id_postulante;
            $per->nombre = $request->nombre;
            $per->app = $request->app;
            $per->apm =$request->apm;
            $per->usuario= $request->usuario;
            $per->contraseña=$request->contraseña;
 
            $per->save();
            $proceso = "ALTA POSTULANTE";
            $mensaje = "Registro guardado correctamente";
            return view ('sistema.mensaje')
            ->with('proceso',$proceso)
            ->with('mensaje',$mensaje);
            }
}