<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index()
    {
        $api = Http::get('loripsum.net/api');
        return view('api', ['api' => $api]);
    }
}
