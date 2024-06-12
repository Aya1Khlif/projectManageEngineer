<?php

namespace Database\Seeders;

use App\Models\Project;
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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => ' ayat',
            'email' => 'ayakhlif2222@gmai.com',
            'password'=> bcrypt('1232456Aa'),
            'email_verified_at'=>time()
        ]);
        User::factory()->create([
            'name' => 'ali ',
            'email' => 'ali@example.com',
            'password' => bcrypt('123456aa'),
            'email_verified_at' => time()
        ]);
        Project::factory()
        ->count(40)
        ->hasTasks(40)
        ->create();
    }
}
