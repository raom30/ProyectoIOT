<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Temperatura;

class TemperaturaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getTemperaturas() {
        $temperaturas = Temperatura::select('fecha AS label','temperatura AS y')->where('temperatura','>=', 0)->get()->toJson();
        
        return $temperaturas;
        
    }
    
    public function getTemperaturasFiltro($fecha1,$fecha2) {
        Log::debug($fecha1.' 00:00:00');
        
        $temperaturas = Temperatura::select('fecha AS label','temperatura AS y')->whereBetween('fecha',[$fecha1.' 00:00:00',$fecha2.' 23:59:00'])->get()->toJson();
        
        return $temperaturas;
        
    }
}
