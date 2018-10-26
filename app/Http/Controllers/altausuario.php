<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\usuario;
class altausuario extends Controller
{
    public function altausuario()
    {
        $clavequesigue =usuario::orderBy('id_usuario','desc')->take(1)->get();
        $idusuario = $clavequesigue[0]->id_usuario+1;
   
           return view ('sistem.altausuario')->with(['idusuario'=>$idusuario]);
       }
       
       public function guardausuario(Request $request)
       {
           //dd($request);
           $nombre =  $request->nombre;
           $apellido_paterno = $request->apellido_paterno;
           $apellido_materno = $request->apellido_materno;
           $nusuario = $request->nusuario;
           $habilidades = $request->habilidades;
           $contrasena = $request->contrasena;
           $correo = $request->correo;
           
            $this->validate($request,[
            'id_usuario'=>'required|numeric',
            'apellido_paterno'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'apellido_materno'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'nusuario'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'contrasena'=> ['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'correo'=>'required|email|max:255',
            'archivo'=>'image|mimes:jpeg,png,gif,jpg'
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
            
            $usu = new usuario;
            $usu->id_usuario = $request->id_usuario;
            $usu->nombre = $request->nombre;
            $usu->apellido_paterno = $request->apellido_paterno;
            $usu->apellido_materno =$request->apellido_materno;
            $usu->nusuario= $request->nusuario;
            $usu->contrasena=$request->contrasena;
            $usu->archivo = $img2;
            $usu->correo=$request->correo;
            $usu->save();
            //dd($usu);
            $proceso = "ALTA PERFIL";
            $mensaje = "Sea registrado correctamente";
            return view ('mensaje')
            ->with('proceso',$proceso)
            ->with('mensaje',$mensaje);
            }
           }
        
