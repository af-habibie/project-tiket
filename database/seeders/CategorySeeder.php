<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set('Asia/Jakarta');

        Category::create([
            'title' => 'Dunia', 
            'slug' => 'dunia', 
            'hit' => 0
        ]);
        Category::create([
            'title' => 'Bisnis', 
            'slug' => 'bisnis', 
            'hit' => 0
        ]);
        Category::create([
            'title' => 'Politik', 
            'slug' => 'politik', 
            'hit' => 0
        ]);
        Category::create([
            'title' => 'Olah Raga', 
            'slug' => 'olah-raga', 
            'hit' => 0
        ]);
        Category::create([
            'title' => 'Kesehatan', 
            'slug' => 'kesehatan', 
            'hit' => 0
        ]);
        Category::create([
            'title' => 'Teknologi', 
            'slug' => 'teknologi', 
            'hit' => 0
        ]);
        Category::create([
            'title' => 'Covid-19', 
            'slug' => 'covid-19', 
            'hit' => 0
        ]);
    }
}
