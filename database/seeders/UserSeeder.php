<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "test";
        $user->email = "example@example.com";
        $user->password = '$2y$10$f8EeZ0nWtwFaECWuwhIYJuCB7I.JtMuFZAr34VXvYMU83x5C/Q10q';
        $user->save();
    }
}
