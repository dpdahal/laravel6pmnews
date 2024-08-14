<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryData = [
            ['name' => 'News'],
            ['name' => 'Sport'],
            ['name' => 'Technology'],
            ['name' => 'Health'],
            ['name' => 'Entertainment'],
        ];
        foreach ($categoryData as $category) {
            $name = $category['name'];
            $categoryExist = Category::where('name', '=', $name)->first();
            if (!$categoryExist) {
                Category::create($category);
            }
        }
    }
}
