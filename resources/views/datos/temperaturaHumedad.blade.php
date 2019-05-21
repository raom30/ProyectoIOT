<div class="row">
    <div class="col-md-12 text-center">
    	<h1><i class="fas fa-bed"></i> Habitación Principal</h1>
    	<p>Medidor de Temperatura y Humedad a tiempo real</p>
    </div>
</div>
<form class="mt-4 ml-2" action="#" id="formTemp">
    <div class="form-group row">
      <label for="example-date-input" class="col-2 col-form-label">Fecha</label>
      <div class="col-3">
        <input class="form-control" type="date" value="" id="fechaTemperatura1" name="fechaTemperatura1">
      </div>
        <div class="col-3">
        <input class="form-control" type="date" value="" id="fechaTemperatura2" name="fechaTemperatura2">
      </div>
        <div class="col-3">
      <button type="submit" id="submitTemp" class="btn btn-primary">Filtrar</button>
      </div>
    </div>
</form>

<div id="temp" style="height: 300px; width: 100%;"></div>

<form class="mt-4 ml-2" action="#" id="formHum">
<div class="form-group row">
  <label for="example-date-input" class="col-2 col-form-label">Fecha</label>
  <div class="col-3">
    <input class="form-control" type="date" value="" id="fechaHumedad1" name="fechaHumedad1">
  </div>
    <div class="col-3">
    <input class="form-control" type="date" value="" id="fechaHumedad2" name="fechaHumedad2">
  </div>
    <div class="col-3">
  <button type="submit" id="submitHum" class="btn btn-primary">Filtrar</button>
  </div>
</div>
</form>
<div id="hum" style="height: 300px; width: 100%;"></div>

<script src="{{ asset('js/datos/temp.js') }}"></script>
<script src="{{ asset('js/datos/hum.js') }}"></script>