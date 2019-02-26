@extends('layout.base')

@section('content')

	<h2 class="center-align light-blue-text">Blog</h2>
	@foreach ($posts as $post)
		<div class="col s12 m6 l6">
			<div class="card">
				<div class="card-content">
					<span class="card-title">{{$post->title}}</span>
					<p>{{$post->content}}</p>
				</div>
				<div class="card-action">
					<form action="/blog/like" method="post">
						<input type="hidden" name="post" value="{{$post->id}}">
						<button class="waves-effect waves-light btn red">
							<i class="material-icons right">plus_one</i>
							{{-- <i class="material-icons right">thumb_up</i> --}}
							{{$post->likes}}
						</button>
						<span class="right">
							{{$post->created_at}}
						</span>
					</form>
				</div>
			</div>
		</div>
	@endforeach


@endsection
