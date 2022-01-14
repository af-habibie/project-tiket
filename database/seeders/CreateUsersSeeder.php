<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set('Asia/Jakarta');

    User::create([
            'name' => 'Habibie',
            'email' => 'alfatichfairuzhabibie@gmail.com',
            'is_admin' =>'1',
            'password' => bcrypt('12345678'),
        ]);
    }
}
