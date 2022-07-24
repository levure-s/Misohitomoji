<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserShowSerchController extends Controller
{
    public function __invoke(){
        return view('user.serch');
    }
}
