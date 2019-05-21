<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Humedad;

class HumedadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getHumedad() {
        $humedads = Humedad::select('fecha AS label','humedad AS y')->where('humedad','>=', 0)->get()->toJson();
             
        
       // Log::debug($humedads);
        
        return $humedads;
        
    }
    
    public function getHumedadFiltro($fecha1,$fecha2) {
        
        $humedads = Humedad::select('fecha AS label','humedad AS y')->whereBetween('fecha',[$fecha1.' 00:00:00',$fecha2.' 23:59:00'])->get()->toJson();
        
        Log::debug($humedads);
        
        return $humedads;
        
    }
    
}
