<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\models\Anime;

class AnimeSeeder extends Seeder{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();

        Anime::insert([
            [
                'name' => 'Demon Slayer',
                'description' => 'A boy travels with their sister to get revenge against the man who killed their family',
                'episodes' => 63,
                'image' => 'demonSlayer.jpg',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],
            [
                'name' => 'Bleach',
                'description' => 'A normal guy gets dragged into the unseen world as a substitute shinigami',
                'episodes' => 387,
                'image' => 'bleach.webp',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ]
        ]);
    }
}
