@extends('layout.base')

@section('js')
	<style>
		body {
			background-image: url('./img/me.png');
			/* background-image: url('https://forums.terraria.org/index.php?attachments/n-2-png.31584/'); */
			background-color: #1FACED;
			background-position: right bottom;
			background-repeat: no-repeat;
			background-size: 13%;
			color: white;
		}
		#logo {
			width: 25%;
		}
		@media only screen and (max-width: 998px) {
			body {
				background-size: 23%;
			}
			#logo {
				margin-top: 170px;
				width: 50%;
			}
		}
	</style>
@endsection
@section('content')
	<div class="valign-wrapper" id="home">
		<div class="center-align" style="width:100%;">
			<img id="logo" src="../img/rot-logo-2.gif">
			<h2>Obe Jansen</h2>
			<h4>A programmer from the Netherlands.</h4>
		</div>
	</div>
@endsection
