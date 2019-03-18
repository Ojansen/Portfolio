@extends('layout.base')

@section('js')
	<style>
		body {
			background-image: url('./img/me.png');
			/* background-image: url('https://forums.terraria.org/index.php?attachments/n-2-png.31584/'); */
			background-color: #4fc3f7;
			background-position: right bottom;
			background-repeat: no-repeat;
			background-size: 13%;
		}
		@media only screen and (max-width: 998px) {
			body {
				background-size: 23%;
			}
		}
	</style>
@endsection
@section('content')
	<div class="valign-wrapper" id="home">
		<div class="center-align" style="width:100%;">
			<h2>Hello, my name is Obe Jansen</h2>
			<h5>A programmer from the Netherlands.</h5>
		</div>
	</div>
@endsection
