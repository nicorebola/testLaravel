<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DateTime;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            'category' => 'Animals',
            'created_at' => new DateTime()
        ]);
        Category::insert([
            'category' => 'Security',
            'created_at' => new DateTime()
        ]);
    }
}
