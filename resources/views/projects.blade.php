@extends('layout.base')

@section('content')
<div class="section hide-on-med-and-up">
	<h3 class="center-align">Projecten</h3>
</div>

<div class="row">
	@foreach ($projecten as $project)
	<div class=" col s12 m6 l6">
		<div class="card hoverable">
			<div class="card-content black-text">
				<span class="card-title">{{ $project->title }}</span>
				<p>{{ $project->description }}</p>
			</div>
			<div class="card-action">
				<a target="_blank" class="btn blue" href="{{ $project->href }}">Bezoek</a>
			</div>
		</div>
	</div>
   	@endforeach
</div>

@endsection
