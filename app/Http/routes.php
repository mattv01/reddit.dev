<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/sayhello/{name?}', function ($name = "World") {
	$data = ['name' => $name];
    return view('my-first-view', $data);
});


Route::get('/uppercase/{caps?}', function ($caps = "Hello") {
    return strtoupper("$caps"); 
});


Route::get('/increment/{num?}', function ($num) {
    if (is_numeric($num)) {
	    return ++$num;
    } else {
    	return "Input must be numeric.";
    }
});


Route::get('/add/{num1?}/{num2?}', function ($num1, $num2) {
	if (is_numeric($num1) && is_numeric($num2)) {
	    return $num1+$num2;
	} else {
		return "Both inputs must be numeric.";
	}
});


Route::get('/rolldice/{guess?}', function ($guess = null) {
	if (!is_numeric($guess)) {
		return $guess . " is not numeric. Guess Again.";
	} elseif ($guess < 1 || $guess > 6) {
		return $guess . " is not between 1 and 6. Guess Again.";
	} else {
		$data = ['diceNum' => rand(1, 6), 'guess' => $guess];
	    return view('roll-dice', $data);
	}
});