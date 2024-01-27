<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\News;
use App\Models\PublicService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $public_services = PublicService::get();

        foreach ($public_services as $public_service) {
            $comments = Comment::factory()->count(fake()->numberBetween(2, 5))->for($public_service, 'commentable')->create();
        }

        $news = News::get();

        foreach ($news as $item) {
            $comments = Comment::factory()->count(fake()->numberBetween(2, 5))->for($item, 'commentable')->create();
        }

        $comments = Comment::get();

        foreach ($comments as $comment) {
            if(fake()->boolean(30)){
                Comment::factory()->count(fake()->numberBetween(1, 3))->for($comment, 'commentable')->create();
            }
        }
    }
}
