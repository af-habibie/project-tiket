<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        date_default_timezone_set('Asia/Jakarta');

        Post::create([
            'user_id' => '1',
            'category_id' => '2',
            'title' => 'Lenovo IRH l340', 
            'slug' => 'lenovo irh l340', 
            'image' => 'image',
            'description' => 'laptop gaming',
            'content' => 'laptop gaming murah tapi berkualitas',
            'slider' => '',
            'hot' => '',
            'show' => '',
            'rating' => '5'
        ]);
    }
}
