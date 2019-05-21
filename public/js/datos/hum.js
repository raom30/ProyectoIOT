$( document ).ready(function() {

var refreshIntervalId =	setInterval(function(){  
	
	$.ajax({
		  url: '/ajax/humedad',
		  dataType: "json",
		  type: "GET",
		  success: function(data){
			  var chart = new CanvasJS.Chart("hum", {
					animationEnabled: true,
					title:{
						text: "Humedad"
					},
					axisX: {
						valueFormatString: "DD MMM,YY h:mm"
					},
					axisY: {
						title: "Humedad (en %)",
						includeZero: true,
						suffix: " %"
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
						percentFormatString: "#0.## %",
						showInLegend: true,
						dataPoints: 
							data
						
					}]
				});
				chart.render();
		  }
		});
}, 3000);	
	
function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}

$( "#formHum" ).submit(function( event ) {
	event.preventDefault();

	clearInterval(refreshIntervalId);
var ajaxReload = $.ajax({
		  url: '/ajax/humedad/'+$("#fechaHumedad1").val()+'/'+$("#fechaHumedad2").val(),
		  dataType: "json",
		  type: "GET",
		  success: function(data){
			  var chart = new CanvasJS.Chart("hum", {
					animationEnabled: true,
					title:{
						text: "Humedad"
					},
					axisX: {
						valueFormatString: "DD MMM,YY h:mm"
					},
					axisY: {
						title: "Humedad (en %)",
						includeZero: true,
						suffix: " %"
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
						percentFormatString: "#0.## %",
						showInLegend: true,
						dataPoints: 
							data
						
					}]
				});
				chart.render();
		  }
		});
});











});