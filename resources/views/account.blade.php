@extends('layouts.master')

@section('content')

<section class="text-center">
	<h1>Your Account</h1>
	<p style="font-size: 1.5em"><strong>Full Name:</strong> {{Auth::user()->name}}</p>
	<p style="font-size: 1.5em"><strong>Email:</strong> {{Auth::user()->email}}</p>
</section>

<section>
	<h1 class="text-center" style="margin-top: 5%">Your Posts</h1>
	@foreach ($posts as $post)
		@if (Auth::id() == $post->created_by)
		    <article class="col-md-4" style="height: 15em">
		        <h3>{{ $post->id }}: <a href="{{ action('PostsController@show', $post->id) }}">{{ $post->title }}</a></h3>
		        <p>{{ $post->url }}</p>
		    	@if (strlen($post->content)>125)
            	    <p>{{ substr($post->content, 0, 125). "... " }}<a href="{{ action('PostsController@show', $post->id) }}">Full Description</a>	</p>
            	@else
            	    <p>{{$post->content}}</p>
            	@endif
		        <p>Written on: {{ $post->created_at->toDayDateTimeString() }}</p>            
		        @if($post->created_at != $post->updated_at)
		            <p>Edited {{ $post->updated_at->diffForHumans() }}</p>
		        @endif
		    </article>
		@endif
	@endforeach
</section>

@stop