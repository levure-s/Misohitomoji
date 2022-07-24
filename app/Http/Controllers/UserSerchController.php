<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserSerchController extends Controller
{
    public function __invoke(Request $request){
        $query = User::query();
        $query->where('name', 'LIKE', "%{$request->keyword}%");
        $users = $query->get();
        return view('user.serch')->with(['users' => $users]);
    }
}
