<?php

namespace App\Http\Controllers;
use App\Http\Controllers\PostsController;
use App\Models\Post;


class HomeController extends Controller
{
    public function showWelcome()
    {
        $posts = Post::with('user')->paginate(3);
        if (!$posts) {
            Log::error("post not found");
            abort(404);
        }

        $data = [];
        $data['posts'] = $posts;
        return view('welcome')->with($data);
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
        $posts = Post::all();
        if (!$posts) {
            Log::error("post not found");
            abort(404);
        }
        $data = [];
        $data['posts'] = $posts;
        return view('account')->with($data);
    }
}