<?php

namespace App\Domain\Project\Repository;

use App\Domain\Project\Model\Project;

class ProjectRepository
{
    public function all() {
        return Project::all();
    }
    public function projectsWithUsers() {
        return Project::with('users')->get();
    }
}
