@extends('layouts.master')
@section('content')
    <div class="container" style="text-align: center;display: table-cell;vertical-align: middle;">
        <div class="content" style="text-align: center;display: inline-block;">
            <div class="title" style="margin: 0;padding: 0;width: 100%;display: table;font-weight: 100;font-family: 'Lato';font-size: 96px;margin-bottom: 5%">
                Welcome to Redditor
            </div>
            <h2>Featured Posts</h2>
            @include('partials.showPosts')
            <a href="{{ action('PostsController@index')}}" class="btn btn-primary">View All Posts</a>
        </div>
    </div>
@stop