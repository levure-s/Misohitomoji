<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostStoreController extends Controller
{
    public function __invoke(PostRequest $request,$id){
        $post = new Post();
        $post->user_id = $id;
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
