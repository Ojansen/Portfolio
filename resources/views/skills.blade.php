@extends('layout.base')

@section('js')
<!--Load the AJAX API-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  	google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
  			['Language', 'Experience', { role: 'style' }],
		  ['HTML / CSS', 50, 'color: orange'],
		  ['Javascript', 40, 'color: #F0F100'],
		  ['Vue.js', 5, 'color: #1FC685'],
		  ['PHP', 45, 'color: #696DBD'],
		  ['Laravel', 40, 'color: #FF3A01'],
		  ['Python 3', 15, 'color: #4363A5'],
		  ['AI', 5, 'color: #1faced'],
		  ['SQL', 15, 'color: #D8D8D8'],
      ]);

      var view = new google.visualization.DataView(data);

      	var options = {
	        title: "Skills",
	        height: 800,
	        bar: { groupWidth: "100%" },
	        legend: { position: "none" },
			vAxis: {
			    viewWindowMode:'explicit',
			    viewWindow: {
			        max:100,
			        min:0
			    }
			}
      	};
      var chart = new google.visualization.ColumnChart(document.getElementById("google_chart"));
      chart.draw(view, options);
  	}
</script>
@endsection
@section('content')
	<div  id="google_chart"></div>
@endsection
