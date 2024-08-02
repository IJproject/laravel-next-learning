<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Community;
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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Community::insert([
          [
              'id' => 1,
              'name' => 'Community 1',
              'description' => 'This is a community 1.',
          ],
          [
              'id' => 2,
              'name' => 'Community 2',
              'description' => 'This is a community 2.',
          ],
          [
              'id' => 3,
              'name' => 'Community 3',
              'description' => 'This is a community 3.',
          ],
      ]);
    }
}
