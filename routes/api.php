<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Temperatura;
use App\Humedad;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/', function (\Illuminate\Http\Request $request) {
    
    Log::debug("--------->". $request);
    
    $temperatura = new Temperatura();
    $temperatura->temperatura = $request->get("?temperature");
    $temperatura->fecha = now()->format("Y-m-d H:i:s");
    $temperatura->save();
    
    $humedad = new Humedad();
    $humedad->humedad =  $request->get("humidity");
    $humedad->fecha = now()->format("Y-m-d H:i:s");
    $humedad->save();
        
    /*return response()->json([
        'hora' => now()->format("Y-m-d H:i:s"),
        'temperatura' => $request->get("temperature"),
        'humedad' => $request->get("humidity") 
    ]);*/
    
});
