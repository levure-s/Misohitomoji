<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserShowController extends Controller
{
    public function __invoke(User $user){
        return view('user.show')->with(['user' => $user]);
    }
}
