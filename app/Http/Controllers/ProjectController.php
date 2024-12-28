<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return inertia("Admin/Index",[
        'projects' => Project::all()
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia("Admin/Create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Project::create($request->validate([
            'project_name' => 'required',
            'project_short_description'=>'required'
        ]));

        return redirect()->route('project.index')
        ->with('success','project was added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
         return inertia("Admin/Show",[
        'project' => $project
       ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
         return inertia("Admin/Edit",[
        'project' => $project
       ]);

      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        
         $project->update($request->validate([
            'project_name' => 'required',
            'project_short_description'=>'required'
        ]));

         return redirect()->route('project.index')
        ->with('success','project was updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
       $project->delete();

       return redirect()->back()
        ->with('success','project was deleted');
    }

     public function dashboard(){
          return inertia("Admin/Dashboard");
    }
    
}
