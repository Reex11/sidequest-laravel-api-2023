<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Event;
use App\Models\User;
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
        // Before (re)seeding the database, remove users and events
        User::truncate();
        Event::truncate();

        User::factory(10)->create();

        // Dummy events -- with thanks to ChatGPT and OpenAI XD
        Event::insert([
            [
                'title' => 'SideQuest Bootcamp 2023',
                'description' => 'A programming camp organized by CS department to enhance students programming skills.',
                'category' => 'bootcamp',
                'status' => 'approved',
                'datetime' => "2023-02-10 13:00:00",
            ],
            [
                'title' => 'Natural Language Processing in Arabic Workshop',
                'description' => 'A workshop focused on natural language processing in the Arabic language.',
                'category' => 'workshop',
                'status' => 'approved',
                'datetime' => "2023-02-15 11:30:00",
            ],
            [
                'title' => 'The Future of Data Science',
                'description' => 'A conference exploring the latest trends and advancements in the field of data science.',
                'category' => 'conference',
                'status' => 'approved',
                'datetime' => "2023-02-20 09:00:00",
            ],
            [
                'title' => 'Hacking Social Engineering',
                'description' => 'A workshop on the techniques and strategies used in social engineering and how to defend against them.',
                'category' => 'workshop',
                'status' => 'approved',
                'datetime' => "2023-02-25 10:00:00",
            ],
            [
                'title' => 'UI/UX Talk Session',
                'description' => 'A talk session on user interface and user experience design in web and mobile applications.',
                'category' => 'talk',
                'status' => 'approved',
                'datetime' => "2023-03-01 08:00:00",
            ],
            [
                'title' => 'Advanced Machine Learning Techniques',
                'description' => 'A workshop on advanced machine learning techniques and their applications in various domains.',
                'category' => 'workshop',
                'status' => 'approved',
                'datetime' => "2023-03-05"
            ],
            [
                'title' => 'Cryptography and Cybersecurity',
                'description' => 'A conference on cryptography and cybersecurity and the latest advancements in these fields.',
                'category' => 'conference',
                'status' => 'pending',
                'datetime' => "2023-03-10"
            ],
            [
                'title' => 'Blockchain and Its Applications',
                'description' => 'A workshop on blockchain technology and its applications in various domains.',
                'category' => 'workshop',
                'status' => 'approved',
                'datetime' => "2023-03-15"
            ],
            [
                'title' => 'Artificial Intelligence in Healthcare',
                'description' => 'A conference on the applications of artificial intelligence in the healthcare industry.',
                'category' => 'conference',
                'status' => 'approved',
                'datetime' => "2023-03-20"
            ],
            [
                'title' => 'Virtual Reality and Augmented Reality',
                'description' => 'A workshop on virtual reality and augmented reality technologies and their applications.',
                'category' => 'workshop',
                'status' => 'approved',
                'datetime' => "2023-03-25"
            ],
            [
                'title' => 'Full-Stack Web Development',
                'description' => 'A workshop on full-stack web development covering front-end and back-end development.',
                'category' => 'workshop',
                'status' => 'approved',
                'datetime' => "2023-03-30"
            ],
            [
                'title' => 'Data Visualization and Dashboarding',
                'description' => 'A workshop on data visualization and dashboarding techniques and tools.',
                'category' => 'workshop',
                'status' => 'declined',
                'datetime' => "2023-04-05"
            ],
            [
                'title' => 'Internet of Things (IoT)',
                'description' => 'A conference on the Internet of Things (IoT) and its applications and challenges.',
                'category' => 'conference',
                'status' => 'pending',
                'datetime' => "2023-04-10"
            ],
            [
                'title' => 'Cloud Computing and Big Data',
                'description' => 'A workshop on cloud computing and big data technologies and their applications.',
                'category' => 'workshop',
                'status' => 'approved',
                'datetime' => "2023-04-15"
            ],
            [
                'title' => 'Agile Project Management',
                'description' => 'A workshop on agile project management and its principles and practices.',
                'category' => 'workshop',
                'status' => 'declined',
                'datetime' => "2023-04-20"
            ],
        ]);
    }
}
