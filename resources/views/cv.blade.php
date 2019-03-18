@extends('layout.base')

@section('content')

	<div class="container" style="margin-top:30px;">
		<div class="row">
			<div class="col s12 m12 l12  center-align">
				<div class="col m12 l2 s12">
					<img width="200px" src="https://media.licdn.com/dms/image/C4D03AQE66T-nY8hVHA/profile-displayphoto-shrink_200_200/0?e=1556755200&v=beta&t=oP9EQDlYuPy_sTa01DftYYGIhMotykJkkuepeEPxQHs" alt="" class="circle responsive-img">
				</div>
				<div class="col m12 l6 s12">
					<h2>Obe Jansen</h2>
					<p>Applicatie - Media ontwikkelaar</p>
				</div>
				<div class="col m12 l4 s12 left-align">
					<p>obe@ailife.nl</p>
				</div>
			</div>
			<div class="col s12 m8 l8">
				<h4 class=" light-blue-text">EXPERIENCES</h4>
				<ul class="collapsible">
					<li class="active">
						<div class="collapsible-header"><h5><b>Pintip - Multoweb,</b> Nieuwleusen - Programmer</h5></div>
						<div class="collapsible-body">
							<p>February 2019 - Heden</p>
							<p>As a backend-developer I have helped the compan with developing new functions.<br>
								I created a documentation page for their custom Symfony packages.
							</p>
							<a target="_blank" href="https://www.multoweb.nl/home.html" class="btn orange">MULTOWEB</a>
							<a target="_blank" href="https://www.pintip.nl" class="btn blue">PINTIP</a>
						</div>
					</li>
					<li>
						<div class="collapsible-header"><h5><b>Jellema automatisering,</b> Nieuwleusen - Assistant</h5></div>
						<div class="collapsible-body">
							<p>April 2016 - April 2016</p>
							<p>I helped with cleaning softeware on the computers,
								assembled and disassembled some and watched with the system administrator.</p>
						</div>
					</li>
				</ul>

				<div class="divider" style="margin:20px; height:0px;"></div>

				<h4 class=" light-blue-text">EDUCATIONS</h4>
				<ul class="collapsible">
					<li class="active">
						<div class="collapsible-header"><h5><b>Deltion College,</b> Zwolle - Application - Media development</h5></div>
						<div class="collapsible-body">
							<p>2016 - 2019</p>
							<p>Dutch, English, Math, JavaScipt, PHP, C#, Java, Project management</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="col s12 m4 l4">
				<h4 class="light-blue-text">SKILLS</h4>
				<ul class="collection z-depth-2">
					<li class="collection-item">Precise</li>
					<li class="collection-item">Friendly</li>
					<li class="collection-item">Calm</li>
					<li class="collection-item">Motivated</li>
				</ul>
				<div class="divider" style="height:0px;margin:20px;"></div>
				<h4 class="light-blue-text">DIPLOMAS</h4>
				<ul class="collection z-depth-2">
					<li class="collection-item">EXIN Agile Scrum Foundation Certificate
						<a href="https://exeed.pro/holder/badge/20877" class="btn-flat"><i class="material-icons">launch</i></a>
					</li>
				</ul>
				<div class="divider" style="height:0px;margin:20px;"></div>
				<h4 class="light-blue-text">LANGUAGES</h4>
				<ul class="collection z-depth-2">
					<li class="collection-item">Cambridge English (BEC)</li>
				</ul>
			</div>
		</div>
	</div>

@endsection
