$( document ).ready(function() {

	setInterval(function(){  
	
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
							title: "Humedad (en °C)",
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
							name: "Ecija",
							type: "area",
							yValueFormatString: "#0.## °C",
							showInLegend: true,
							dataPoints: 
								data
							
						}]
					});
					chart.render();
			  }
			});
	}, 3000);	
	
function humedad(data)
{
	for (var i = 0; i < data.length; i++) {
		return { x: new Date(data[i].fecha), y: data[i].humedad}
	}
}

function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}

});