<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;

class publicacionController extends Controller
{
    
    public function primeruni($id)
    {
        $publicacion = Publicacion::find($id);
        $nombre = $publicacion->contenido;
        $titulo = $publicacion->titulo;
        $contenido = $publicacion->contenido;

        return view('sidebar-left',['nombre'=>$nombre,'titulo' => $titulo, 'contenido' =>$contenido ]);;
    } 

    

    public function segundauni($id){
        $publicacion = Publicacion::find($id);
        $nombre = $publicacion->nombre;
        $titulo = $publicacion->titulo;
        $contenido = $publicacion->contenido;

        return view('unidad2',['nombre'=>$nombre,'titulo' => $titulo, 'contenido' =>$contenido ]);
    }

   



    
}
