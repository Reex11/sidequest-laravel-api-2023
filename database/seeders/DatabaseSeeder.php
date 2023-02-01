<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::truncate();
        \App\Models\Event::truncate();

        \App\Models\User::factory(10)->create();
        \App\Models\Event::insert([
            [
                'title' => 'SideQuest Bootcamp 2023',
                'description' => 'A programming camp organized by CS department to enhance students programming skills.',
                'category' => 'bootcamp',
                'datetime' => "2023-02-10 13:00:00",
                'status' => 'approved'
            ],
            [
                'title' => 'Natural Language Processing in Arabic Workshop',
                'description' => 'A workshop focused on natural language processing in the Arabic language.',
                'category' => 'workshop',
                'datetime' => "2023-02-15 11:30:00",
                'status' => 'approved'
            ],
            [
                'title' => 'The Future of Data Science',
                'description' => 'A conference exploring the latest trends and advancements in the field of data science.',
                'category' => 'conference',
                'datetime' => "2023-02-20 09:00:00",
                'status' => 'approved'
            ],
            [
                'title' => 'Hacking Social Engineering',
                'description' => 'A workshop on the techniques and strategies used in social engineering and how to defend against them.',
                'category' => 'workshop',
                'datetime' => "2023-02-25 10:00:00",
                'status' => 'approved'
            ],
            [
                'title' => 'UI/UX Talk Session',
                'description' => 'A talk session on user interface and user experience design in web and mobile applications.',
                'category' => 'talk',
                'datetime' => "2023-03-01 08:00:00",
                'status' => 'approved'
            ],
        ]);
    }
}
