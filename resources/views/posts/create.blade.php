@extends('layouts.master')

@section('content')
<h1>Creating Post</h1>
<form  method="POST" action="{{ action('PostsController@store') }}">
	@include('partials.posts_form')
	{{ method_field('POST') }}
	<input type="hidden" name="id" value="{{Auth::id()}}">
	<input type="submit" value="Create Post" class="btn btn-default btn-success">
</form>

@stop