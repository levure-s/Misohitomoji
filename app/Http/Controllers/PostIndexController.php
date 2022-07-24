<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostIndexController extends Controller
{
    public function __invoke(){
        $posts = Auth::user()->posts()->latest()->get();
        return view('welcome')->with(['posts' => $posts]);
    }
}
