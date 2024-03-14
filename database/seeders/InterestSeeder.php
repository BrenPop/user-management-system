<?php

namespace Database\Seeders;

use App\Models\Interest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hobbies = [
            [
                'name' => 'Reading',
                'slug' => 'reading',
                'description' => 'Reading is the process of obtaining information from written or printed material.'
            ],
            [
                'name' => 'Cooking',
                'slug' => 'cooking',
                'description' => 'Cooking is the practice or skill of preparing food by combining, mixing, and heating ingredients.'
            ],
            [
                'name' => 'Gardening',
                'slug' => 'gardening',
                'description' => 'Gardening is the practice of growing and cultivating plants as part of horticulture.'
            ],
            [
                'name' => 'Photography',
                'slug' => 'photography',
                'description' => 'Photography is the art, application, and practice of creating durable images by recording light.'
            ],
            [
                'name' => 'Painting',
                'slug' => 'painting',
                'description' => 'Painting is the practice of applying paint, pigment, color, or other medium to a solid surface.'
            ],
            [
                'name' => 'Drawing',
                'slug' => 'drawing',
                'description' => 'Drawing is the process of making marks on a surface by applying pressure from or moving a tool or implement.'
            ],
            [
                'name' => 'Playing Musical Instruments',
                'slug' => 'playing-musical-instruments',
                'description' => 'Playing musical instruments involves producing sounds using instruments such as guitar, piano, drums, etc.'
            ],
            [
                'name' => 'Sports (e.g., Soccer, Basketball, Tennis)',
                'slug' => 'sports',
                'description' => 'Sports involve physical activity and skill, often competitive in nature.'
            ],
            [
                'name' => 'Traveling',
                'slug' => 'traveling',
                'description' => 'Traveling involves going from one place to another, typically for leisure, recreation, or business purposes.'
            ],
            [
                'name' => 'Hiking',
                'slug' => 'hiking',
                'description' => 'Hiking is an outdoor activity that involves walking or trekking on trails or paths in natural environments.'
            ],
        ];

        Interest::insert($hobbies);
    }
}
