<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News\News;
class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newsData=[
            [
                'category_id'=>1,
                'user_id'=>1,
                'title'=>'News Title one',
                'slug'=>'news-title-one',
                'summary'=>'News Summary 1',
                'description'=>'News Description 1'
            ],
            [
                'category_id'=>1,
                'user_id'=>1,
                'title'=>'News Title one demo',
                'slug'=>'news-title-one-demo',
                'summary'=>'News Summary 1',
                'description'=>'News Description 1'
            ],
            [
                'category_id'=>2,
                'user_id'=>1,
                'title'=>'Sport Title one',
                'slug'=>'sport-title-one',
                'summary'=>'Sport Summary 1',
                'description'=>'Sport Description 1'
            ],
            [
                'category_id'=>3,
                'user_id'=>1,
                'title'=>'Technology Title one',
                'slug'=>'technology-title-one',
                'summary'=>'Technology Summary 1',
                'description'=>'Technology Description 1'
            ],
            [
                'category_id'=>4,
                'user_id'=>1,
                'title'=>'Health Title one',
                'slug'=>'health-title-one',
                'summary'=>'Health Summary 1',
                'description'=>'Health Description 1'
            ],
            [
                'category_id'=>5,
                'user_id'=>1,
                'title'=>'Entertainment Title one',
                'slug'=>'entertainment-title-one',
                'summary'=>'Entertainment Summary 1',
                'description'=>'Entertainment Description 1'
            ],
        ];

        foreach ($newsData as $news) {
            $title = $news['title'];
            $newsExist = News::where('title', '=', $title)->first();
            if (!$newsExist) {
                News::create($news);
            }
        }
    }
}
