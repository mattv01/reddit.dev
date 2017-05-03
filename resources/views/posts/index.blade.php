@extends('layouts.master')

@section('content')
	<h1>All Posts</h1>

    @include('partials.showPosts')


<!-- PAGINATION -->
{!! $posts->render() !!} 

@stop