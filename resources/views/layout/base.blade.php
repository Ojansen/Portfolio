<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>Obe Jansen</title>
		<!--Import Google Icon Font-->
      	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!-- Compiled and minified CSS -->
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css">
		<link href="https://fonts.googleapis.com/css?family=Muli:300" rel="stylesheet">

		<!--Let browser know website is optimized for mobile-->
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">

	</head>
	<body>
	<div class="row">
		<ul class="col l2 m6 s12 sidenav sidenav-fixed blue lighten-3 black-text" id="slide-out" style="padding:0">
		    <li>
				<div class="user-view" style="height:120px;">
		        	<div class="background">
				  		<img src="https://66.media.tumblr.com/d107d95ea184b0f72ac9f4b4f3dff131/tumblr_n74schTsHd1snc5kxo1_540.gif" style="width:70%;">
		        	</div>
					<!-- <a href="#user"><img class="circle" src="https://bxssl.com/img/me5.jpg" width="100px"></a> -->
					<span class="sidenav-close hide-on-large-only right"><i class="material-icons">close</i></span>
					<h5 class="black-text">Obe Jansen</h5>
		        	<!-- <h4 class="black-text">Applicatie - Mediaontwikkeling</h4> -->
		    	</div>
			</li>
			<li><div class="divider"></div></li>
			<li><a href="/" class="active"><i class="material-icons">person</i>Profile</a></li>
			<li><a href="/projecten"><i class="material-icons">dashboard</i>Projecten</a></li>
			<li><a href="/blog"><i class="material-icons">chat</i>Blog</a></li>
			<li><a href="projecten"><i class="material-icons">work</i>CV</a></li>
		    <li><a href="projecten"><i class="material-icons">equalizer</i>Skills</a></li>
		</ul>
		<nav class="hide-on-large-only blue lighten-3">
			<div class="nav-wrapper">
				<ul id="nav-mobile" class="left">
					<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
			    </ul>
			</div>
		</nav>
		<div class="offset-l2 col s12 m12 l10">
			@yield('content')
		</div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
	<script type="text/javascript">
		M.AutoInit();
	</script>
	</body>
</html>