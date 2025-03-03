<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        user::factory()->create([
            'first_name' => 'john',
            'last_name' => 'doe',
            'email'=> 'test@example.com',
        ]);
        $this->call(jobSeeder::class);
    }
}
