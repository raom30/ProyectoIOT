<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Temperatura;

class TemperaturaController extends Controller
{

    public function getTemperaturas() {
        $temperaturas = Temperatura::all();
        
        foreach ($temperaturas as $temperatura){
            $json = [
                'x' => $temperatura->fecha,
                'y' => $temperatura->temperatura
            ];
           
        }
        
        return json_encode($json);
        
    }
}
