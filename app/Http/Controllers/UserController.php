<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users',[
            'users'=> $users //aqui vai a listagem de todos os usarios, pq eu usei o model User:: ali em cima.
        ]);
    }

    public function showUser(User $user)
    {
        return view('user', [
            'user' => $user //passando o objeto inteiro pra view
        ]);
    }


}
