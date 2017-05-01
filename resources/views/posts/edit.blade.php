@extends('layouts.master')

@section('content')
	<h1>Editing Post</h1>

	<!-- EDITING/UPDATING POST -->
	<form  method="POST" action="{{ action('PostsController@update', [$post->id]) }}">
		{!! csrf_field() !!}
		<div class="row control-group">
			<div class="form-group col-xs-12 floating-label-form-group controls">
				<label for="title">Title:</label> 
				<input class="form-control" type="text" name="title" value="{{ $post->title }}" placeholder="title">
				@if ($errors->has('title'))
					{{$errors->first('title')}}
				@endif
			</div>
		</div>
		<div class="row control-group">
			<div class="form-group col-xs-12 floating-label-form-group controls">
				<label for="url">URL:</label>
				<input class="form-control" type="text" name="url" value="{{ $post->url }}" placeholder="url">
				@if ($errors->has('url'))
					{{$errors->first('url')}}
				@endif
			</div>
		</div>
		<div class="row control-group">
			<div class="form-group col-xs-12 floating-label-form-group controls">
				<label for="content">Content:</label>
				<textarea class="form-control" name="content" rows="5" cols="40" placeholder="content">{{ $post->content }}</textarea>
			</div>
		</div>
		{{ method_field('PUT') }}
		<input type="hidden" name="id" value="{{Auth::id()}}">
		<input type="submit" value="Update Post" class="btn btn-default btn-success">
	</form>

	<!-- DELETE POST BUTTON-->
	<form  method="POST" action="{{ action('PostsController@destroy', [$post->id]) }}">
		{!! csrf_field() !!}
		<input class="btn btn-danger pull-right" type="submit" value="Delete">
		{{ method_field('DELETE') }}
	</form>

@stop