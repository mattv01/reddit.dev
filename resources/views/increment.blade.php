@extends('layouts.master')

@section('content')
    @if (is_numeric($num))
	    <h2>{{$num}}</h2>
    @else 
    	<h2>Input must be numeric.</h2>
    @endif
@stop