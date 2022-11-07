<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects', [
           'projects' => $projects //lado esquerdo vai pra view em formato de variável
        ]);
    }
}
