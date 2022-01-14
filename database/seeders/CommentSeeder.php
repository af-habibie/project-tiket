<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'author_id' =>3,
            'user_id' => 3,
            'post_id' => 6,
            'comment' => 'Mantap ga?',
            'children' => [
                [
                    'author_id' =>3,
                    'user_id' => 4,
                    'post_id' => 6,
                    'comment' => 'Mantap Lah Masa Engga',
                ],
            ],
        ]);
    }
}