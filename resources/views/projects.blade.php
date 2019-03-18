@extends('layout.base')

@section('content')
	<div class="offset-l1 col s12 m10 l10">
		<h1  class="center-align light-blue-text">Online projecten</h1>
		<div class="divider"></div>
		@foreach ($projecten as $project)
			<div class="col m6 s12 l4 scrollspy" id="{{ $project->title }}">
				<h3>{{ $project->title }}</h3>
				<p>{{ $project->description}}</p>
				<blockquote><span class="red-text">Technologies Implemented: </span>{{ $project->technologies }}</blockquote>

				<a target="_blank" class="btn blue" href="{{ $project->href }}">Live demo</a>
			</div>
		@endforeach
		<div class="col s12 m12 l12">
			<h1 class="center-align light-blue-text">Projects on Github</h1>
		</div>
		@foreach ($repos as $repo)
			<div class=" col m6 l4 s12">
				<div class="card hoverable large">
					<div class="card-content">
						<div class="card-title">
							<h4>{{$repo->name}}</h4>
						</div>
						<p>Language: {{ $repo->language }}</p>
						<p>Size: {{ $repo->size }}Kb</p>
						<h5>Description:</h5>
						<p>{{$repo->description}}</p>
						<h5>Last commit</h5>
						<p>{{ $repo->commits[0]->commit->message }}</p>
					</div>
					<div class="card-action">
						<a class="btn blue" href="{{$repo->svn_url}}">Bezoek</a>
					</div>
				</div>
			</div>
		@endforeach
	</div>
@endsection
