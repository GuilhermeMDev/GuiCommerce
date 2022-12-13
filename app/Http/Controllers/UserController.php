<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function about()
    {
        return view ('about');
    }


}
