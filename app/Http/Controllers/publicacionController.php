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
        
        for($i=10;$i<17;$i++){
            $publicacion = Publicacion::find($i);
            $publicaciones[$i] = [
            
                'nombre' => $publicacion['nombre'],
                'titulo' => $publicacion['titulo'],
                'contenido' => $publicacion['contenido'],
            
            ];
        }
             return view('unidad2',['publicaciones' => $publicaciones]);
        
    }

   



    
}
