@extends('layouts.master')


@section('content')
<div class="row align-center">
	@foreach ($posts as $post)
	<div class="card" style="width: 300px;">
		<a href="/posts/{{$post->id}}"><img src="http://images.phpgang.com/2015/11/Laravel-5.png"></a>
		<div class="card-section">
			<a href="/posts/{{$post->id}}"><h4>{{$post->title}}</h4></a>
			<p>{{$post->content}}</p>
			<a href="{{$post->url}}">{{$post->url}}</a>
		</div>
	</div>
	@endforeach
</div>

@stop
