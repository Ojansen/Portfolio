<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="theme-color" content="#db5945"/>
	<meta name="msapplication-navbutton-color" content="#db5945"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="#db5945"/>

	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

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
			<div class="user-view">
                <a href="/"><img src="../img/site_logo_white.png" style="width:90%;"></a>
				<span class="sidenav-close hide-on-large-only right"><i class="white-text far fa-1x fa-times-circle"></i></span>
			</div>
		</li>
		<li><div class="divider" style="margin:0px;"></div></li>
		<li><a href="/projecten"><i class="fas fa-1x fa-cubes"></i>Projecten</a></li>
		<li><a href="/blog"><i class="fas fa-1x fa-comments"></i>Blog</a></li>
		<li><a href="/cv"><i class="fas fa-1x fa-briefcase"></i>CV</a></li>
		<li><a href="/skills"><i class="fas fa-1x fa-chart-bar"></i>Skills</a></li>
		<li><a href="/notebooks"><i class="fab fa-1x fa-python"></i>Python</a></li>


		<div class="sidenav-footer center-align text-black">
			<a href="https://www.instagram.com/ikbenobe/"><i class="fab fa-2x fa-instagram"></i></a>
			<a href="https://www.linkedin.com/in/obe-jansen-a14714164"><i class="fab fa-2x fa-linkedin"></i></a>
			<a href="https://github.com/Ojansen"><i class="fab fa-2x fa-github-square"></i></a>
			<a href="https://bxssl.tumblr.com/"><i class="fab fa-2x fa-tumblr-square"></i></a>
		</div>

	</ul>
	<nav class="hide-on-large-only light-blue lighten-2">
		<div class="nav-wrapper">
			<ul id="nav-mobile" class="left">
				<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="fas fa-hamburger"></i></a>
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
