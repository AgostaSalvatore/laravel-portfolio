<?php

namespace Database\Seeders;

use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newProject = new Project();

            $newProject->title       = $faker->sentence(3);
            $newProject->description = $faker->text(100);
            $newProject->image       = $faker->imageUrl(640, 480);
            $newProject->link        = $faker->url();
            $newProject->type        = $faker->randomElement(['Laravel', 'Web Design', 'Backend', 'Frontend']);

            $newProject->save();
        }
    }
}
