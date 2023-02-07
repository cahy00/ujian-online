<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Classroom;
use App\Models\Lesson;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

				Lesson::create([
					'title' => 'Bahasa Indonesia'
				]);

				Classroom::create([
					'title' => 'XII IPS 1'
				]);

				User::create([
					'name' => 'Administrator',
					'email' => 'admin@gmail.com',
					'password' => bcrypt('12345')
				]);
    }
}
