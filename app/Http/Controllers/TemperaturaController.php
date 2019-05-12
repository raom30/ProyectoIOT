<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Temperatura;

class TemperaturaController extends Controller
{

    public function getTemperaturas() {
        $temperaturas = Temperatura::select('fecha AS label','temperatura AS y')->where('temperatura','>=', 0)->get()->toJson();
        
        return $temperaturas;
        
    }
}
