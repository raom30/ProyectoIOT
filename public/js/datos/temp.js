$( document ).ready(function() {
	
	var ajaxTemp = null;
	
var refreshIntervalId = setInterval(function(){  
	ajaxTemp = $.ajax({
		  url: '/ajax/temperatura',
		  dataType: "json",
		  type: "GET",
		  success: function(data){
			  var chart = new CanvasJS.Chart("temp", {
					animationEnabled: true,
					title:{
						text: "Temperatura"
					},
					axisX: {
						valueFormatString: "DD MMM,YY h:mm"
					},
					axisY: {
						title: "Temperatura (en °C)",
						includeZero: true,
						suffix: " °C"
					},
					legend:{
						cursor: "pointer",
						fontSize: 16,
						itemclick: toggleDataSeries
					},
					toolTip:{
						shared: true
					},
					data: [{
						name: "Habitación Principal",
						type: "area",
						yValueFormatString: "#0.## °C",
						showInLegend: true,
						dataPoints: data
					}]
				});
				chart.render();
		  }
		});

}, 3000);	

$('#reloadTempReal').click(function(){
	 location.reload();
});



function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}

$( "#formTemp" ).submit(function( event ) {
	  event.preventDefault();
	 // alert($("#fechaTemperatura").val())
	  clearInterval(refreshIntervalId);
  var ajaxReload = $.ajax({
		  url: '/ajax/temperatura/'+$("#fechaTemperatura1").val()+'/'+$("#fechaTemperatura2").val(),
		  dataType: "json",
		  type: "GET",
		  success: function(data){
			  var chart = new CanvasJS.Chart("temp", {
					animationEnabled: true,
					title:{
						text: "Temperatura"
					},
					axisX: {
						valueFormatString: "DD MMM,YY h:mm"
					},
					axisY: {
						title: "Temperatura (en °C)",
						includeZero: true,
						suffix: " °C"
					},
					legend:{
						cursor: "pointer",
						fontSize: 16,
						itemclick: toggleDataSeries
					},
					toolTip:{
						shared: true
					},
					data: [{
						name: "Habitación Principal",
						type: "area",
						yValueFormatString: "#0.## °C",
						showInLegend: true,
						dataPoints: data
					}]
				});
				chart.render();
		  }
		});
	  
	});
});