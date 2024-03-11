<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest\CreateProjectRequest;
use App\Http\Requests\ProjectRequest\UpdateProjectRequest;
use App\Interfaces\ProjectInterface;
use App\Models\Project;

class ProjectController extends Controller
{
    public function __construct(private ProjectInterface $project)
    {

    }

    public function index()
    {
        return $this->project->getProject();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProjectRequest $request)
    {
        return $this->project->createProject($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return $this->project->showProject($project);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {

        return $this->project->updateProject($request->validated(), $project);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        return $this->project->deleteProject($project);

    }
}
