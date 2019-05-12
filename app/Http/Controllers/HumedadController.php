<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Humedad;

class HumedadController extends Controller
{

    public function getHumedad() {
        $humedads = Humedad::select('fecha AS label','humedad AS y')->where('humedad','>=', 0)->get()->toJson();
        
        /*foreach ($humedads as $humedad){
            $json = [
                'x' => $humedad->fecha,
                'y' => $humedad->humedad
            ];
            
        }*/
        
        
        Log::debug($humedads);
        
        return $humedads;
        
    }
    
}
