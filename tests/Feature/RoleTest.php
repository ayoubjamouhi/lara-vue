<?php

namespace Tests\Feature;

use App\Models\Role;
use Database\Seeders\DatabaseSeeder;
use Database\Seeders\RoleSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function showRoles() {
        $this->withoutExceptionHandling();
        //DatabaseSeeder::call();
        //$seed = $this->seed(RoleSeeder::class);
        $roleUser = Role::factory()->create([
                                    'name' => 'User'
                                ]);
        Role::factory()->create([
                                    'name' => 'Administrator'
                                ]);
        Role::factory()->create([
                                    'name' => 'Manager'
                                ]);

        //$roles = Role::all();
        //$this->assertDatabaseHas(Role::class, );
        $this->assertDatabaseCount(Role::class, 3);
    }
}
