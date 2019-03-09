<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="theme-color" content="#db5945"/>
		<meta name="msapplication-navbutton-color" content="#db5945"/>
		<meta name="apple-mobile-web-app-capable" content="yes"/>
		<meta name="apple-mobile-web-app-status-bar-style" content="#db5945"/>

		<link rel="icon" type="image/png" href="/favicon.ico">

		<title>Obe Jansen</title>
		<!--Import Google Icon Font-->
      	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!-- Compiled and minified CSS -->
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css">

		<!--Let browser know website is optimized for mobile-->
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- beetje jammer weer -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
		@yield('js')
		
	</head>
	<body>
	<div class="row">
		<ul class="col l2 m6 s12 sidenav sidenav-fixed light-blue lighten-2 black-text" id="slide-out" style="padding:0">
		    <li>
				<div class="user-view" style="height:200px;">
		        	<div class="background">
				  		<img src="https://66.media.tumblr.com/d107d95ea184b0f72ac9f4b4f3dff131/tumblr_n74schTsHd1snc5kxo1_540.gif" style="width:100%;">
		        	</div>
					<!-- <a href="#user"><img class="circle" src="https://bxssl.com/img/me5.jpg" width="100px"></a> -->
					<span class="sidenav-close hide-on-large-only right"><i class="material-icons">close</i></span>
					<div style="height:150px" class="valign-wrapper center-align">
						<a href="/" class="active">
							<h5 class="black-text"><u>Obe Jansen</u></h5>
						</a>
		        		<!-- <p class="black-text name">Applicatie - Mediaontwikkelaar</p> -->
					</div>
		    	</div>
			</li>
			<li><div class="divider" style="margin:0px;"></div></li>
			<li><a href="/projecten"><i class="fas fa-2x fa-cubes"></i>Projecten</a></li>
			<li><a href="/blog"><i class="fas fa-2x fa-blog"></i>Blog</a></li>
			<li><a href="/cv"><i class="fas fa-2x fa-briefcase"></i>CV</a></li>
			<li><a href="/skills"><i class="fas fa-2x fa-chart-bar"></i>Skills</a></li>
			<li><a href="/notebooks"><i class="fab fa-2x fa-python"></i>Python</a></li>


			<div class="sidenav-footer center-align text-black">
				<a href="https://www.instagram.com/ikbenobe/"><i class="fab fa-3x fa-instagram"></i></a>
				<a href="https://www.linkedin.com/in/obe-jansen-a14714164"><i class="fab fa-3x fa-linkedin"></i></a>
				<a href="https://github.com/Ojansen"><i class="fab fa-3x fa-github-square"></i></a>
				<a href="https://bxssl.tumblr.com/"><i class="fab fa-3x fa-tumblr-square"></i></a>
			</div>

		</ul>
		<nav class="hide-on-large-only light-blue lighten-2">
			<div class="nav-wrapper">
				<ul id="nav-mobile" class="left">
					<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
			    </ul>
			</div>
		</nav>
		<div class="offset-l2 col s12 m12 l10" style="padding: 0px;">
			@yield('content')
		</div>
	</div>

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
	<script type="text/javascript">
		M.AutoInit();
	</script>
	</body>
</html>
