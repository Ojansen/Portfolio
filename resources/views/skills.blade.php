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
  		['PHP', 40, 'color: #696DBD'],
		['Laravel', 30, 'color: #FF3A01'],
		['HTML / CSS', 60, 'color: orange'],
  		['Sass', 30, 'color: #D04493'],
  		['Python 3', 10, 'color: #4363A5'],
		['Javascript', 50, 'color: #F0F100'],
		['Vue.js', 10, 'color: #1FC685'],
  		['SQL', 30, 'color: #D8D8D8'],
      ]);

      var view = new google.visualization.DataView(data);

      	var options = {
	        title: "Skills",
	        height: 800,
	        bar: { groupWidth: "90%" },
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

<div class="container" >
	<div class="card-panel">
		<div  id="google_chart">

		</div>
	</div>
</div>

@endsection
