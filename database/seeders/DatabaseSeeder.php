<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();
        \App\Models\Post::factory(1)->create();
        \App\Models\Comment::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $faker = Factory::create();
        $gender = $faker->randomElement(['male', 'female']);
        foreach (range(1, 10) as $index) {
            DB::table('students')->insert([
                'name' => $faker->name($gender),
                'email' => $faker->email
            ]);
        }
    }
}
