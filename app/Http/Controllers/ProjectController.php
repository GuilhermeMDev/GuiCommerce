<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()

    {
        $projects = Project::all();
//        $projects = Project::find();
//        $projects = Project::where();

        return view('projects', [
            'projects' => $projects, //lado esquerdo vai pra view em formato de variável
        ]);
    }

    public function showProject(Project $project)
    {
        return view('project', [
            'project' => $project
        ]);
    }

    public function newProject()
    {
        return $newIdea = Project::create([
            'name' => 'Teste',
            'description' => 'Testando banco de dados'
        ]);
    }
}
