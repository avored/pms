<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class AvoRedDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            ['first_name' => 'Purvesh',
            'last_name' => 'Patel',
            'email' => 'ind.purvesh@gmail.com',
            'password' => bcrypt('admin123')]
        );
    }
}
