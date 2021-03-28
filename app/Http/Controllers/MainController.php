<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Forum;

class MainController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function forum(Request $request)
    {
    	if($request->method() == "POST"){
    		$this->validate($request, [
    			'message' => 'required'
    		]);

    		auth()->user()->posts()->create($request->only('message'));
    	}

    	$posts = Forum::latest()->paginate(5);

    	return view('pages.forum',[
    		'posts' => $posts
    	]);
    }

    public function destroy(Forum $post)
    {
    	$this->authorize('delete', $post);

    	$post->delete();

    	return back();
    }
}
