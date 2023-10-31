<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Event;
class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            Event::create([
                'title' => $faker->text(50, true),
                'description' => $faker->text(50, true),
                'date' => $faker->date,
                'location' => $faker -> address(100, true),

            ]);
        }
    }
}
