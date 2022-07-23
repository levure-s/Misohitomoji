<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $posts = [
            ['賞味期限','切れは任せろ','俺たちは','何でも食って','生きてきたんだ'],
            ['草っぱらに','宮殿のごときが','出現し','それがなにかと','いへばトイレ'],
            ['ゆるキャラの','コバトンくんに','戦ける','父よ叩くな','中は人だぞ']
        ];
        return view('welcome')
            ->with('posts'=>$posts);
    }

    public function showLoginForm(){
        return view('user.loginForm');
    }

    public function create(){
        return view('user.createForm');
    }

    public function store(Request $request){
        $request->validate(
            [
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
            ],[
                'name.required'=>'名前は必須です',
                'email.required'=>'メールアドレスは必須です',
                'password.required'=>'パスワードは必須です'
            ]
        );

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect()
            ->route('posts.index',$user);
    }
}
