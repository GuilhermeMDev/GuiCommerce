<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()

    {
        $projects = Project::all();
//        $projects = Project::find();//
//        $projects = Project::delete();

        return view('projects', [
            'projects' => $projects //lado esquerdo vai pra view em formato de variável
        ]);
    }

    public function showProject(Project $projects)
    {
        return view('project', [
            'projects' => $projects
        ]);
    }
}
