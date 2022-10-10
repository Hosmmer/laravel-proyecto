<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth')->except('index','show');
    }

    public function index()
    {
        return view('projects.index', [
            'projects' => ($projects = Project::latest()->paginate()),
        ]);
    }

    public function show($id)
    {
        return view('projects.show', [
            'project' => ($project = Project::findOrFail($id)),
        ]);
    }

    public function create()
    {
        return view('projects.create', [
            'project' => new Project
        ]);
    }

    public function store(SaveProjectRequest $request)

    {

        Project::create($request->validated());

        return redirect()->route('projects.index')
        ->with('status','El proyecto fue creado con exito');

    }


    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request)
    {

        $project->update($request->validated());

        return redirect()->route('projects.show', $project)
        ->with('status','El proyecto fue actualizado con exito');

    }

    public function destroy(Project $project)
    {

        $project->delete();

        return redirect()->route('projects.index')
        ->with('status','El proyecto fue eliminado con exito');
    }
}
