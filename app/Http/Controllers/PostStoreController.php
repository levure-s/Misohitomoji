<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Http\Requests\PostRequest;


class PostStoreController extends Controller
{
    public function __invoke(PostRequest $request){
        $post = new Post();
        $post->user_id = Auth::user()->id;
        $post->shoku = $request->shoku;
        $post->kyoku = $request->kyoku;
        $post->yoku = $request->yoku;
        $post->shiku = $request->shiku;
        $post->kekku = $request->kekku;
        $post->save();
        return redirect()
            ->route('posts.index');
    }
}
