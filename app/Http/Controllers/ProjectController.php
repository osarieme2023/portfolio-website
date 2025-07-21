<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        // Get all projects with their media
        $project = Project::with('media')->get();
        return response()->json($project);
    }
}
