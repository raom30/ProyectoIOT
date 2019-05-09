window.onload = function () {

$.ajax({
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
					name: "Ecija",
					type: "area",
					yValueFormatString: "#0.## °C",
					showInLegend: true,
					dataPoints: [
						{ x: new Date(data.x), y: data.y }
					]
				}]
			});
			chart.render();
	  }
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

}