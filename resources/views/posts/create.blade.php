@extends('layouts.master')

@section('content')

<form  method="POST" action="{{ action('PostsController@store') }}">
	@include('partials.posts_form')
	{{ method_field('POST') }}
</form>

@stop