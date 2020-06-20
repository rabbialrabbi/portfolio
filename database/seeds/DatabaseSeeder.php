<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Rabbial Anower',
            'email'=>'rabbialrabbi@gmail.com',
            'password'=> Hash::make('12021126')
        ]);
        // $this->call(UserSeeder::class);
    }
}
