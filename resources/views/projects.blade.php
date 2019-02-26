@extends('layout.base')

@section('content')
{{-- <div class="section hide-on-med-and-up"> --}}
{{-- </div> --}}
<div class="offset-l1 col s12 m9 l9">
		<h1  class="center-align light-blue-text">Online projecten</h1>
	<div class="divider"></div>
		@foreach ($projecten as $project)
			<div class="section scrollspy" id="{{ $project->title }}">
				<h3>{{ $project->title }}</h3>
				<p>{{ $project->description}}</p>
				<blockquote><span class="red-text">Technologies Implemented: </span>{{ $project->technologies }}</blockquote>

				<a target="_blank" class="btn blue" href="{{ $project->href }}">Live demo</a>
			</div>
			<div class="divider"></div>
		@endforeach
			<div class="section scrollspy" id="repos">
				<h1 class="center-align light-blue-text">Projects on Github</h1>
				@foreach ($repos as $repo)
					<div class=" col m6 l4 s12">
						<div class="card hoverable small">
							<div class="card-content">
								<div class="card-title">
									{{$repo->name}}
								</div>
								<p>{{$repo->description}}</p>
							</div>
							<div class="card-action">
								<a class="btn blue" href="{{$repo->svn_url}}">Bezoek</a>
							</div>
						</div>
					</div>
				@endforeach
			</div>
			<div class="divider"></div>
</div>
<div class="col hide-on-small-only m2 l2" style="position: sticky; top: 0;">
	<ul class="section table-of-contents">
		@foreach ($projecten as $project)
			<li><a href="#{{ $project->title }}">{{$project->title }}</a></li>
		@endforeach
		<li><a href="#repos">Github repo</a></li>
	</ul>
</div>
@endsection
