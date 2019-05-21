@extends('layout.layout')

@section('index')
<div class="row">
    <div class="col-md-12 text-center">
    	<h1>Bienvenido a la gestión de su hogar</h1>
    	<p>Selecciones un lugar de la casa en el plano de su hogar</p>
    	<p>Ahora mismo las zonas disponible para su control son:</p>
    	<ul>
    		<p><i class="fas fa-bed"></i> Dormitorio Principal<p>
    	</ul>
    </div>
</div>

<div class="row mt-4">
	<div class="col-md-12 text-center">
		<img src="{{ asset('img/plano.jpg') }}" class="img-fluid" alt="Plano Casa" usemap="#image-map">
		<a href="/temperaturaHumedad" title="Habitacion principal" style="position: absolute; left: 3.67%; top: 30.42%; width: 23.28%; height: 37.08%; z-index: 2;"></a>
		<a href="#" title="Habitacion 1" style="position: absolute; left: 12.81%; top: 69.31%; width: 19.45%; height: 30.56%; z-index: 2;"></a>
		<a href="#" title="Habitacion 2" style="position: absolute; left: 33.05%; top: 74.31%; width: 14.92%; height: 25%; z-index: 2;"></a>
		<a href="#" title="Comedor" style="position: absolute; left: 64.3%; top: 9.17%; width: 23.91%; height: 29.72%; z-index: 2;"></a>
		<a href="#" title="Cocina" style="position: absolute; left: 37.19%; top: 0%; width: 22.97%; height: 27.5%; z-index: 2;"></a>
		<a href="#" title="Baño 1" style="position: absolute; left: 3.59%; top: 13.89%; width: 14.06%; height: 14.31%; z-index: 2;"></a>
		<a href="#" title="Baño 2" style="position: absolute; left: 26.17%; top: 4.31%; width: 9.92%; height: 25%; z-index: 2;"></a>
		<a href="#" title="Salón" style="position: absolute; left: 40.47%; top: 42.78%; width: 26.25%; height: 29.03%; z-index: 2;"></a>
	</div>
</div>

@endsection