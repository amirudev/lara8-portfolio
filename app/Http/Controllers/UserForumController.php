<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserForumController extends Controller
{
    public function index(User $user)
    {
    	$posts = $user->posts()->with(['user'])->latest()->paginate(5);

    	return view('users.posts.index', [
    		'user' => $user,
    		'posts' => $posts
    	]);
    }
}
