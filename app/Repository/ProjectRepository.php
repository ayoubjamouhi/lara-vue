<?php

namespace App\Repository;

use App\Models\Project;

class ProjectRepository
{
    public function all() {
        return Project::all();
    }
    public function projectsWithUsers() {
        return Project::with('users')->get();
    }
}
