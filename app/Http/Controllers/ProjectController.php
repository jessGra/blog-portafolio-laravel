<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Models\Project;

class ProjectController extends Controller
{   

    public function __construct()
    {
     $this->middleware('auth')->except('index', 'show');   
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('created_at', 'DESC')->paginate(5);

        return view('projects/index', compact('projects'));
    }

    public function show(Project $project)
    {   
        return view('projects/show', compact('project'));
    }

    public function create()
    {   
        $project = new Project;
        return view('projects/create', compact('project'));
    }

    //guardar en la base de datos un proyecto
    public function store(SaveProjectRequest $request)
    {
        Project::create($request->validated());

        return redirect()->route('projects.index')->with('status','Proyecto creado con exito');
    }

    //cargar formulario para editar proyecto
    public function edit(Project $project)
    {
        return view('projects/edit', compact('project'));
    }
    
    //actualizar en la base de datos un proyecto
    public function update(SaveProjectRequest $request, Project $project)
    {
       $project->update($request->validated());

       return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue actualizado con exito');
    }

    //eliminar de la base de datos un proyecto
    public function destroy(Project $project)
    {   
        $project->delete();
        return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con exito');
    }
}
