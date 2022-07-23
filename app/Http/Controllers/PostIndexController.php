<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostIndexController extends Controller
{
    public function __invoke(){
        $posts = Auth::user()->posts()->latest()->get();
        return view('welcome')->with(['posts' => $posts]);
    }
}
