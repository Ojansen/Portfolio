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
			<h4 class=" light-blue-text">ERVARINGEN</h4>
			<ul class="collapsible">
				<li class="active">
					<div class="collapsible-header"><h5><b>Pintip - Multoweb,</b> Nieuwleusen - Programeur</h5></div>
					<div class="collapsible-body">
						<p>Februari 2019 - Heden</p>
						<p>Als backend PHP programeur heb ik meegeholen aan het ontwikkelen van functies, <br>
							en met het bedenken van innovative ideën.</p>
						<a target="_blank" href="https://www.multoweb.nl/home.html" class="btn orange">MULTOWEB</a>
						<a target="_blank" href="https://www.pintip.nl" class="btn blue">PINTIP</a>
					</div>
				</li>
				<li>
					<div class="collapsible-header"><h5><b>Jellema automatisering,</b> Nieuwleusen - Assistent</h5></div>
					<div class="collapsible-body">
						<p>April 2016 - April 2016</p>
						<p>Computers opschonen, computers demonteren - monteren,
							meegekeken bij systeembeheer.</p>
					</div>
				</li>
			</ul>

			<div class="divider" style="margin:20px; height:0px;"></div>

			<h4 class=" light-blue-text">OPLEIDINGEN</h4>
			<ul class="collapsible">
				<li class="active">
					<div class="collapsible-header"><h5><b>Deltion College,</b> Zwolle - Applicatie - Media ontwikkelaar</h5></div>
					<div class="collapsible-body">
						<p>2016 - 2019</p>
						<p>Nederlands, Engels, Rekenen, JavaScipt, PHP, C#, Java, Project management</p>
					</div>
				</li>
				<li>
					<div class="collapsible-header"><h5><b>Talentstad Beroepscollege,</b> Zwolle - VMBO kader</h5></div>
					<div class="collapsible-body">
						<p>2014 - 2016</p>
						<p>Nederlands, Engels, Wiskunde, rekenen, NaSk, Specialisatie elektrotechniek</p>
					</div>
				</li>
				<li>
					<div class="collapsible-header"><h5><b>Agnieten College,</b> Nieuwleusen</h5></div>
					<div class="collapsible-body">
						<p>2012 - 2014</p>
						<p>Nederlands, Engels, Wiskunde, Frans, NaSk, Aardrijkskunde, Geschiedenis, Maatschappijleer, Godsdienst, Biologie</p>
					</div>
				</li>
			</ul>
		</div>
		<div class="col s12 m4 l4">
			<h4 class="light-blue-text">VAARDIGHEDEN</h4>
			<ul class="collection z-depth-2">
				<li class="collection-item">Nauwkeurig</li>
				<li class="collection-item">Vriendelijk</li>
				<li class="collection-item">Rustig</li>
				<li class="collection-item">Gemotiveerd</li>
			</ul>
			<div class="divider" style="height:0px;margin:20px;"></div>
			<h4 class="light-blue-text">DIPLOMA'S</h4>
			<ul class="collection z-depth-2">
				<li class="collection-item">EXIN Agile Scrum Foundation Certificate
					<a href="https://exeed.pro/holder/badge/20877" class="btn-flat"><i class="material-icons">launch</i></a>
				</li>
				<li class="collection-item">VMBO kader</li>
			</ul>
			<div class="divider" style="height:0px;margin:20px;"></div>
			<h4 class="light-blue-text">TALEN</h4>
			<ul class="collection z-depth-2">
				<li class="collection-item">Cambridge English (BEC)</li>
			</ul>
		</div>
	</div>
</div>

@endsection
