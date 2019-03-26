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
		  ['PHP / Laravel',48, 'color: #B543F2'],
		  ['Python 3', 33, 'color: #4363A5'],
		  ['AI', 11, 'color: #1FACED'],
		  ['ML', 23, 'color: #ffff00'],
		  ['Tensorflow', 5, 'color: #FF7200'],
		  ['Scikit-learn', 12, 'color: #3499CD'],
		  ['NumPy', 15, 'color: #FF3A01'],
		  ['Pandas', 8, 'color: #4363A5'],
		  ['UX/UI', 15, 'color: #ff00ff'],
		  ['SQL', 30, 'color: #D8D8D8'],
      ]);

      var view = new google.visualization.DataView(data);

      	var options = {
	        title: "How well I think that I know it from 0 to 100. Zoomed in for readability",
	        height: 800,
	        bar: { groupWidth: "90%" },
	        legend: { position: "none" },
			vAxis: {
			    viewWindowMode:'explicit',
			    viewWindow: {
			        max:50,
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
	<div class="section" style="padding: 0px">
		<div class="container">
			<div class="row" style="margin-bottom: 0px">
				<div class="col s12 m12 l12">
					<h2 class="left-align light-blue-text" style="margin-bottom: 50px">Software I use</h2>
					<div class="col s6 m3 l2 center-align">
						<img src="http://resources.jetbrains.com/storage/products/toolbox/img/meta/toolbox_logo_300x300.png" width="100px">
						<p>JetBrain IDE</p>
					</div>
					<div class="col s6 m3 l2 center-align">
						<img src="https://pbs.twimg.com/profile_images/1013865232945405952/oAZhGwc__400x400.jpg" width="100px">
						<p>Anaconda / Conda</p>
					</div>
					<div class="col s6 m3 l2 center-align">
						<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Kubuntu_logo.svg/1024px-Kubuntu_logo.svg.png" width="100px">
						<p>Linux Kubuntu</p>
					</div>
					<div class="col s6 m3 l2 center-align">
						<img src="https://git-scm.com/images/logos/downloads/Git-Icon-1788C.png" width="100px">
						<p>Git</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div style="max-width: 1430px" id="google_chart"></div>
@endsection
