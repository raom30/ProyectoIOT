<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Humedad;

class HumedadController extends Controller
{

    public function getHumedad() {
        $humedads = Humedad::all();
        
        foreach ($humedads as $humedad){
            $json = [
                'x' => $humedad->fecha,
                'y' => $humedad->humedad
            ];
            
        }
        
        return json_encode($json);
        
    }
    
}
