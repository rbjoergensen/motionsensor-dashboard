<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript">
window.onload = function () {
var dataPoints = [];
var chart = new CanvasJS.Chart("chartContainer",{
	title:{
		text:"Rendering Chart with dataPoints from External JSON"
	},
	data: [{
		type: "line",
		dataPoints : dataPoints,
	}]
});
$.getJSON("https://canvasjs.com/services/data/datapoints.php?xstart=1&ystart=10&length=100&type=json", function(data) {
	$.each(data, function(key, value){
		dataPoints.push({x: value[0], y: parseInt(value[1])});
	});
	chart.render();
});
}
</script>

</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
</body>
</html>
