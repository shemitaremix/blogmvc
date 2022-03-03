<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;

class publicacionController extends Controller
{
    
    public function primeruni()
    {
        

        return view('sidebar-left');;
    } 

    

    public function segundauni(){
        $publicacion = Publicacion::find(10);
        $nombre2 = $publicacion->nombre;
        $titulo2 = $publicacion->titulo;
        $contenido2 = $publicacion->contenido;

        return view('unidad2',['nombre'=>$nombre2,'titulo' => $titulo2, 'contenido' =>$contenido2 ]);
        
    }

   



    
}
