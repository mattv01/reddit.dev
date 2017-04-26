@extends('layouts.master')

@section('content')

<form  method="POST" action="{{ action('PostsController@update') }}">
	@include('partials.posts_form')
	{{ method_field('PUT') }}
</form>

<form  method="POST" action="{{ action('PostsController@destroy') }}">
	{!! csrf_field() !!}
	<input class="btn btn-danger" type="submit" value="Delete">
	{{ method_field('DELETE') }}
</form>


@stop