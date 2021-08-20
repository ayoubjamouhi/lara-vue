<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoleUserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function UserRole()
    {
        $this->withoutExceptionHandling();
        User::
        $user = User::with('role')->get();
        dd($user);
        $this->assertCount(1, $user);
    }
}
