<?php

namespace App\Interfaces;

use App\Models\Project;

interface ProjectInterface
{
    public function getProject();

    public function showProject(Project $project);

    public function createProject(array $project);

    public function updateProject(array $dataProject, Project $project);

    public function deleteProject(Project $project);
}
