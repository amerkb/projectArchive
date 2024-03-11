<?php

namespace App\Repository;

use App\Http\Resources\ProjectResource;
use App\Interfaces\ProjectInterface;
use App\Models\Project;
use App\Models\Update;

class ProjectRepository extends BaseRepositoryImplementation implements ProjectInterface
{
    public function model()
    {
        return Project::class;
    }

    public function getFilterItems($filter)
    {
        // TODO: Implement getFilterItems() method.
    }

    public function createProject(array $project)
    {
        return ProjectResource::make($this->create($project));
    }

    public function getProject()
    {
        $projects = $this->all();

        return ProjectResource::collection($projects);
    }

    public function showProject(Project $project)
    {
        return ProjectResource::make($this->getById($project->id));
    }

    public function updateProject(array $dataProject, Project $project)
    {
        $message = 'convert ';
        foreach ($dataProject as $index => $newdata) {
            $convertmessage = $index.' from '.$project[$index].' to '.$newdata.' and ';
            $message .= $convertmessage;

        }
        $message = substr($message, 0, -5);
        $new_project = $this->updateById($project->id, $dataProject);
        Update::create(['message' => $message, 'project_id' => $new_project->id]);

        return ProjectResource::make($new_project);
    }

    public function deleteProject(Project $project)
    {
        $this->deleteById($project->id);

        return response()->json(['message' => 'delete successfully']);
    }
}
