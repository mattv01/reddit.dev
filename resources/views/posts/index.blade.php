@extends('layouts.master')

@section('content')
	<h1>All Posts</h1>

	@foreach($posts as $post)
        <article class="col-md-4" style="height: 20em">
            <h3>{{ $post->id }}: <a href="{{ action('PostsController@show', $post->id) }}">{{ $post->title }}</a></h3>
            <p>{{ $post->url }}</p>
            <p>{{ $post->content }}</p>
            @if (Auth::id() == $post->created_by)
            	<p>Posted By <strong>You</strong></p>
            @else
            	<p>Posted By <strong>{{$post->user->name}}</strong></p>
            @endif
            <p>Writted on: {{ $post->created_at->setTimezone('America/Chicago')->toDayDateTimeString() }}</p>            
            @if($post->created_at != $post->updated_at)
                <p>Edited {{ $post->updated_at->setTimezone('America/Chicago')->diffForHumans() }}</p>
            @endif

        </article>
    @endforeach
	
{!! $posts->render() !!}

@stop