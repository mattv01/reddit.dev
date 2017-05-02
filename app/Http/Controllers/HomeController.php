<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function showWelcome()
    {
        return view('welcome');
    }

    public function sayHello($name)
	{
    	$data = ['name' => $name];
    	return view('my-first-view', $data);
    }

    public function uppercase($word) 
    {
    	$data = ['low' => $word, 'caps' => strtoupper("$word")]; 
    	return view('uppercase', $data);
	}

	public function increment($num) {
    	$data = ['num' => ++$num];
    	return view('increment', $data);
	}

    public function showAccount()
    {
        return view('account');
    }
}