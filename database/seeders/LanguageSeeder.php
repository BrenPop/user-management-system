<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            [
                'name' => 'English',
                'slug' => 'english',
                'description' => 'English is a West Germanic language that originated in Anglo-Saxon England.'
            ],
            [
                'name' => 'Mandarin Chinese',
                'slug' => 'mandarin-chinese',
                'description' => 'Mandarin Chinese is the most spoken language in the world by number of native speakers.'
            ],
            [
                'name' => 'Spanish',
                'slug' => 'spanish',
                'description' => 'Spanish, or Castilian, is a Romance language that originated in the Iberian Peninsula.'
            ],
            [
                'name' => 'Hindi',
                'slug' => 'hindi',
                'description' => 'Hindi is an Indo-Aryan language spoken chiefly in the northern and central parts of India.'
            ],
            [
                'name' => 'Arabic',
                'slug' => 'arabic',
                'description' => 'Arabic is a Semitic language that first emerged in the 1st to 4th centuries CE.'
            ],
            [
                'name' => 'Bengali',
                'slug' => 'bengali',
                'description' => 'Bengali is an Indo-Aryan language spoken predominantly in the Indian subcontinent.'
            ],
            [
                'name' => 'Portuguese',
                'slug' => 'portuguese',
                'description' => 'Portuguese is a Romance language originating in the Iberian Peninsula.'
            ],
            [
                'name' => 'Russian',
                'slug' => 'russian',
                'description' => 'Russian is an East Slavic language native to Russia and other countries of Eastern Europe.'
            ],
            [
                'name' => 'French',
                'slug' => 'french',
                'description' => 'French is a Romance language that originated in the 8th century in the region of Île-de-France, France.'
            ],
            [
                'name' => 'Urdu',
                'slug' => 'urdu',
                'description' => 'Urdu is an Indo-Aryan language primarily spoken in Pakistan and India.'
            ],
            [
                'name' => 'German',
                'slug' => 'german',
                'description' => 'German is a West Germanic language mainly spoken in Central Europe.'
            ],
            [
                'name' => 'Japanese',
                'slug' => 'japanese',
                'description' => 'Japanese is an East Asian language spoken by about 128 million people, primarily in Japan.'
            ],
            [
                'name' => 'Korean',
                'slug' => 'korean',
                'description' => 'Korean is an East Asian language spoken by about 77 million people, mainly in North and South Korea.'
            ],
            [
                'name' => 'Italian',
                'slug' => 'italian',
                'description' => 'Italian is a Romance language of the Indo-European language family.'
            ],
            [
                'name' => 'Turkish',
                'slug' => 'turkish',
                'description' => 'Turkish is a member of the Oghuz branch of the Turkic languages.'
            ],
            [
                'name' => 'Dutch',
                'slug' => 'dutch',
                'description' => 'Dutch is a West Germanic language spoken by around 24 million people as a first language.'
            ],
        ];

        Language::insert($languages);
    }
}
