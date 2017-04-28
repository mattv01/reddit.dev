<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Redditor</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- 	<link rel="stylesheet" href="css/font-awesome.min.css"> -->	
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
 	<link rel="stylesheet" type="text/css" href="">
 	<style>html, body {height: 100%;}</style>
</head>
<body>
@include('partials.navbar')
	<div class="container" style="margin-top: 10%">
		@if (Session::has('errorMessage'))
    		<div class="alert alert-danger">{{ session('errorMessage') }}</div>
		@endif
		@if (Session::has('successMessage'))
			<div class="alert alert-success">{{ session('successMessage') }}</div>
		@endif

	    @yield('content')
	</div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>