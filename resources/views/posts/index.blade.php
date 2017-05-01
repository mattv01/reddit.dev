@extends('layouts.master')

@section('content')
	<h1>All Posts</h1>
	<table class="table">
		<tr>
			<th>Post #</th>
			<th>Title</th>
			<th>URL</th>
			<th>Content</th>
		</tr>
		@foreach ($posts as $post)
		<tr>
			<td>{{$post->id}}</td>
			<td><a style="color: black" href="{{action('PostsController@show', [$post->id])}}">{{$post->title}}</a></td>
			<td><a href="{{$post->url}}" target="_blank">{{$post->url}}</a></td>
			<td>{{$post->content}}</td>
		</tr>
		@endforeach
	</table>
	
{!! $posts->render() !!}

@stop