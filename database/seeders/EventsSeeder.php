<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Event::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few Events in our database:
        for ($i = 0; $i < 50; $i++) {
            Event::create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
            ]);
        }
    }
}
