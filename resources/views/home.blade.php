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
		img {
			width: 25%;
		}
		@media only screen and (max-width: 998px) {
			body {
				background-size: 23%;
			}
			img {
				margin-top: 170px;
				width: 50%;
			}
		}
	</style>
@endsection
@section('content')
	<div class="valign-wrapper" id="home">
		<div class="center-align" style="width:100%;">
			<img src="../img/rot-logo-2.gif">
			<h2>Hello, my name is Obe Jansen</h2>
			<h5>A programmer from the Netherlands.</h5>
		</div>
	</div>
@endsection
