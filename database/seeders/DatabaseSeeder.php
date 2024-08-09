<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Intern;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Create 2 admin users
        User::factory()->admin()->count(2)->create();

        // Create 3 intern users and their intern details
        User::factory()->intern()->count(3)->create()->each(function ($user) {
            Intern::create([
                'id' => (string) Str::uuid(), // Generate a UUID
                'user_id' => $user->id,
                'current_education_level' => 'Undergraduate',
                'technical_expertise' => ['PHP', 'Laravel', 'MySQL'],
                'bio_information' => [
                    'age' => 21,
                    'residence' => 'Cityville',
                    'personal_achievements' => 'Top student in programming contests',
                ],
            ]);
        });
    }
}
