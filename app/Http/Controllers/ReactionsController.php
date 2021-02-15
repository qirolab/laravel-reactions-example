<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ReactionsController extends Controller
{
    public function toggle(Post $post, Request $request)
    {
        $post->toggleReaction($request->reaction);
    }
}