@extends('layouts.master')

@section('content')

<table class="table">
	<tr>
		<th>Title</th>
		<th>URL</th>
		<th>Content</th>
	</tr>
	<tr>
		<td>{{$post->title}}</td>
		<td><a href="{{$post->url}}" target="_blank">{{$post->url}}</a></td>
		<td>{{$post->content}}</td>
	</tr>
</table>

@if (Auth::id() == $post->created_by)
	<a class="btn btn-primary" href="{{action('PostsController@edit', [$post->id])}}">Edit</a>
@endif

@stop