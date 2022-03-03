<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publicacionController extends Controller
{
    public function primeruni($id){
        $publicacion = Publicacion::find(1);
        $titulo = $publicacion->titulo;
        $contenido = $publicacion->contenido;

        return view('primerunidad',['Titulo' => $titulo, 'Contenido' =>$contenido ]);
    }

    public function temasunidad1($id)
    {
        $publicacion = Publicacion::find(1);
        $titulo = $publicacion->titulo;
        $contenido = $publicacion->contenido;

        return view('primerunidad',['Titulo' => $titulo, 'Contenido' =>$contenido]);
    }

    public function segundauni($id){
        $publicacion = Publicacion::find(1);
        $titulo = $publicacion->titulo;
        $contenido = $publicacion->contenido;

        return view('segundaunidad',['Titulo' => $titulo, 'Contenido' =>$contenido ]);
    }

    public function temasunidad2($id)
    {
        $publicacion = Publicacion::find(1);
        $titulo = $publicacion->titulo;
        $contenido = $publicacion->contenido;

        return view('segunda',['Titulo' => $titulo, 'Contenido' =>$contenido]);
    }



    
}
