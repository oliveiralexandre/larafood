<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'AlexandreOliveira',
            'email' => 'oliveiralexandre0@gmail.com',
            'password' => bcrypt('154154'),

        ]);
    }
}
