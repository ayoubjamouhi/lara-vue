<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'role_id' => 1
                                ]);
        User::factory()->create([
                                    'role_id' => 2
                                ]);
        User::factory()->create([
                                    'role_id' => 3
                                ]);
    }
}
