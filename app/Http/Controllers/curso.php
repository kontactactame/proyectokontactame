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
	public function modificam($idm)
	{
		$maestro = maestros::where('idm','=',$idm)
		                     ->get();
		$idc = $maestro[0]->idc;
		$carrera = carreras::where('idc','=',$idc)->get();
		
		$otrascarreras = carreras::where('idc','!=',$idc)
		                 ->get();
		//return $carrera;
		//return $maestro;
		return view ('sistema.modificamaestro')
		->with('maestro',$maestro[0])
	    ->with('idc',$idc)
	    ->with('carrera',$carrera[0]->nombre)
		->with('otrascarreras',$otrascarreras);
	
	}
    public function guardamodificam(Request $request)
	{
		$nombre =  $request->nombre;
        $edad = $request->edad;
        $sexo = $request->sexo;
        $idm = $request->idm;
        $correo = $request->correo;
		$cp = $request->cp;
		$beca = $request->beca;
        
		 $this->validate($request,[
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
	        $maest = maestros::find($idm);
	        $maest->idm = $request->idm;
			$maest->nombre = $request->nombre;
			$maest->edad =$request->edad;
			$maest->sexo= $request->sexo;
			$maest->cp=$request->cp;
			 if($file!="")
	        {	
			$maest->archivo = $img2;
	        }
			$maest->beca=$request->beca;
			$maest->idc=$request->idc;
			$maest->save();
			$proceso = "MODIFICA MAESTRO";
			$mensaje = "REgistro ha sido modificado correctamente";
		    return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	 
	 
	 
	 
	 
		 echo "Listo para modificar";
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





