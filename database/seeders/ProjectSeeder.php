<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = Project::factory(10)->create();
        foreach (Project::all() as $project) {
            $users = User::all()->take(rand(1,3))->pluck('id');
            $project->users()->attach($users);
    }
    }
}
