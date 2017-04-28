<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Log;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::paginate(4);
        $data = [];
        $data['posts'] = $posts;
        return view('posts.index')->with($data);
    }


    public function create(Request $request)
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {
        $rules = Post::$rules;
        $this->validate($request, $rules);

        $post = new Post();
        $post->title = $request->title;
        $post->url = $request->url;
        $post->content = $request->content;
        $post->created_by = 13;
        $post->save();

        Log::info("New post saved: ", $request->all());

        $request->session()->flash('successMessage', 'Post saved successfully');
        return redirect()->action('PostsController@show', [$post->id]);
    }


    public function show(Request $request, $id)
    {
        $post = Post::find($id);
        if (!$post) {
            Log::error("post not found");
            abort(404);
        }
        $data = [];
        $data['post'] = $post;
        return view('posts.show')->with($data);
    }


    public function edit(Request $request, $id)
    {
        $post = Post::find($id);
        if (!$post) {
            $request->session()->flash('errorMessage', 'Post cannot be found');
            return redirect()->action('PostsController@index');
        }
        $data = [];
        $data['post'] = $post;
        return view('posts.edit')->with($data);
    }


    public function update(Request $request, $id)
    {
        $rules = Post::$rules;
        $this->validate($request, $rules);
        
        $post = Post::find($id);
        if (!$post) {
            Log::error("post not found");
            abort(404);
        }
        $post->title = $request->title;
        $post->url = $request->url;
        $post->content = $request->content;
        $post->created_by = 13;
        $post->save();

        Log::info("Updated post: ", $request->all());

        $request->session()->flash('successMessage', 'Post updated successfully');
        return redirect()->action('PostsController@show', [$post->id]);
    }


    public function destroy(Request $request, $id)
    {
        $post = Post::find($id);
        if (!$post) {
            Log::error("post not found");
            abort(404);
        }
        $post->delete();

        Log::info("Post deleted: ", $request->all());

        $request->session()->flash('successMessage', 'Post deleted successfully');
        return redirect()->action('PostsController@index');
    }
}