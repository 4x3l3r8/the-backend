<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
            'name' => 'admin1',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin1'),
            'is_admin' => 1
        ]);
    }
}
