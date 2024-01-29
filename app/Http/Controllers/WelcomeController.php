<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\SkillResource;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\AboutResource;
use App\Models\Skill;
use App\Models\Project;
use App\Models\About;
use Inertia\Inertia;


class WelcomeController extends Controller
{
    public function welcome () 
    {
        $skills = SkillResource::collection(Skill::all());
        $projects = ProjectResource::collection(Project::with('skill')->get());

        return Inertia::render('Welcome', compact('skills', 'projects'));
    }
}
