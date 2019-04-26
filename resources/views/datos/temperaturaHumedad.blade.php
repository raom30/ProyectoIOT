<script>
window.onload = function () {
//Better to construct options first and then pass it as a parameter
var options = {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light2",
	title:{
		text: "Temperatura en Ecija Actual"
	},
	axisY:{
		title: "Temperature (°C)",
		suffix: "°C",
		includeZero: false
	},
	data: [{
		type: "rangeColumn",
		toolTipContent: "<b>{x}</b><br/>Minimum: {y[0]}°C<br/>Maximum: {y[1]}°C",
		dataPoints: [
			{ 
				x: new Date(2015, 00, 01),
				y: [13.51, 24.58] 
			 },
			{ x: new Date(2015, 00, 01), y: [15.55, 26.89] },
			{ x: new Date(2015, 00, 01), y: [17.99, 29.07] },
			{ x: new Date(2015, 00, 01), y: [21.18, 31.87] },
			{ x: new Date(2015, 00, 01), y: [23.54, 34.09] },
			{ x: new Date(2015, 00, 01), y: [23.82, 32.48] },
			{ x: new Date(2015, 00, 01), y: [24.28, 31.88] },
			{ x: new Date(2015, 00, 01), y: [23.82, 31.52] },
			{ x: new Date(2015, 00, 01), y: [22.52, 31.55] },
			{ x: new Date(2015, 00, 01), y: [20.68, 31.04] },
			{ x: new Date(2015, 00, 01), y: [17.81, 28.10] },
			{ x: new Date(2015, 00, 01), y: [14.75, 25.67] }
		]
	}]
};

$("#chartContainer").CanvasJSChart(options);
}
</script>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
