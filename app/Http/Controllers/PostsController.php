<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{

    public function index()
    {
        $posts = \App\Models\Post::orderBy('created_at', 'desc')->paginate(4);
        return view('/posts/index')->with('posts', $posts);
    }

    public function create()
    {
        return view('/posts/create');
    }

    public function store(Request $request)
    {
        $rules = array(
            'title' => 'required|max:100',
            'url'   => 'required',
            'content' => 'required'
        );

        $this->validate($request, $rules);

        $post = new \App\Models\Post();
        $post->title = $request->title;
        $post->url = $request->url;
        $post->content = $request->content;
        $post->created_by = 1; //TODO: Update this to actual user ID session
        $post->save();

        return redirect()->action('PostsController@index');
    }

    public function show($id)
    {
        $post = \App\Models\Post::find($id);
        if ($post === null){
            abort(404);
        }else{
            return view('/posts/show')->with('post', $post);
        }
    }

    public function edit($id)
    {
        return 'This should show a form for editing a post';
    }

    public function update(Request $request, $id)
    {
        return 'This should edit a post';
    }

    public function destroy($id)
    {
        return 'This should remove a post';
    }
}
