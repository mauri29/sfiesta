<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Post;
use App\Http\Requests;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post)
    {
    	Alert::info('You are awesome!', 'Thank you!')->persistent("Super Fiesta")->autoclose(10000);
    	return view('post.post')->with([
    		'post' => $post,
    	]);
    }
}
