<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use App\Models\Project;
use App\Models\Skill;
use App\Http\Resources\ProjectResource;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = ProjectResource::collection(Project::with('skill')->get());
        return Inertia::render('Projects/Index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $skills = Skill::all();
        return Inertia::render('Projects/Create', compact('skills'));
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'image' => ['required', 'image'],
            'name' => ['required', 'min:3'],
            'description' => ['required', 'min:6'],
            'skill_id' => ['required']
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('projects');
            Project::create([
                'skill_id'=> $request->skill_id,
                'name'=> $request->name,
                'description'=> $request->description,
                'image'=> $image,
                'project_url'=> $request->project_url
            ]);

            return Redirect::route('projects.index')->with('message', 'Project created successfuly.');
        }
        return Redirect::back();
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $skills = Skill::all();
        return Inertia::render('Projects/Edit', compact('project', 'skills'));
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @param int $id
     */
    public function update(Request $request, Project $project)
    {

        $image = $project->image;
        $request->validate([
            'name' => ['required', 'min:3'],
            'skill_id' => ['required']
        ]);
        if($request->hasFile('image')){
            Storage::delete($project->image);
            $image = $request->file('image')->store('projects');
        }

        $project->update([
            'name' => $request->name,
            'description'=> $request->description,
            'skill_id' => $request->skill_id,
            'project_url' => $request->project_url,
            'image' => $image
        ]);

        return Redirect::route('projects.index')->with('message', 'Project updated successfuly.');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        Storage::delete($project->image);
        $project->delete();

        return Redirect::back()->with('message', 'Project deleted successfuly.');
    }
}
