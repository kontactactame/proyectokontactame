<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\carreras;
use App\maestros;

class curso extends Controller
{
    public function mensaje()
    {
        echo "hola mundo con controlador";
    }
    public function areatriangulo()
    {
    $base= 10;
    $altura = 40;
    $area = ($base *$altura)/2;
    echo "El area es" . $area;
    }
    public function areacuadrado($lado)
    {

    $area = $lado* $lado;
    echo "El area del cuadrado es" . $area;
    }
    public function total($cant,$costo)
    {
     $total = $cant * $costo;
    
    return view("ventas")
    ->with('total',$total)
    ->with('cant',$cant)
    ->with('costo',$costo);
    }
    public function altamaestro()
    {
     	 //select * from carreras     all()
		 //select * from carreras where activo = 'si'
	 //  group by nombre asc
		 
	   $clavequesigue = maestros::orderBy('idm','desc')
								->take(1)
								->get();
	 IF ($clavequesigue=="")
	 {
		 $idms= 1;
	 }
	 else
	 {
     $idms = $clavequesigue[0]->idm+1;
	 } 
	 $carreras = carreras::where('activo','=','SI')
	                      ->orderBy('nombre','asc')
						  ->get();
	 //return $carreras;
     return view ("sistema.altamaestro")
	        ->with('carreras',$carreras)
			->with('idms',$idms);
    }
    
    public function guardamaestro(Request $request)
    {
        $nombre =  $request->nombre;
        $edad = $request->edad;
        $sexo = $request->sexo;
        $idm = $request->idm;
        $correo = $request->correo;
		$cp = $request->cp;
		$beca = $request->beca;
        
		 $this->validate($request,[
	     'idm'=>'required|numeric',
         'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
         'edad'=>'required|integer|min:18',
		 'cp'=>['regex:/^[0-9]{5}$/'],
		 'beca'=>['regex:/^[0-9]+[.][0-9]{2}$/'],
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
	 
            $maest = new maestros;
			$maest->idm = $request->idm;
			$maest->nombre = $request->nombre;
			$maest->edad =$request->edad;
			$maest->sexo= $request->sexo;
			$maest->cp=$request->cp;
			$maest->archivo = $img2;
			$maest->beca=$request->beca;
			$maest->idc=$request->idc;
			$maest->save();
			$proceso = "ALTA DE MAESTRO";
			$mensaje = "REgistro guardado correctamente";
		    return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
        
    }
    public function reportemaestros()
	{
	$maestros=maestros::withTrashed()->orderBy('idm','asc')
	          ->get();
	//return $maestros;
	  return view('sistema.reporte')
	  ->with('maestros',$maestros);                  
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
	  
            $per = perfil::find ($id_perfil);
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
	public function eliminam($idm)
	{
		  maestros::find($idm)->delete();
		    $proceso = "ELIMINAR MAESTROS";
			$mensaje = "El maestro ha sido desactivado Correctamente";
			return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	}
    public function restauram($idm)
	{
	maestros::withTrashed()->where('idm',$idm)->restore();
$proceso = "RESTAURACION DE MAESTRO";	
$mensaje="Registro restaurado correctamente";
return view('sistema.mensaje')
->with('proceso',$proceso)
->with('mensaje',$mensaje);
	}
     public function efisicam($idm)
	{
		
   maestros::withTrashed()->where('idm',$idm)->forceDelete();
$proceso = "ELIMINACION FISICA DE MAESTRO";	
$mensaje="Registro eliminado del sistema correctamente";
return view('sistema.mensaje')
->with('proceso',$proceso)
->with('mensaje',$mensaje);
    }
    
    
    
    
    
    
    
    
    
    
    
    
}





