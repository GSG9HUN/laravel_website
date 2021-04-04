<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'=>'testuser',
            'email'=>'testemail@gmail.com',
            'email_verified_at'=>Carbon::parse('2021-02-21'),
            'password'=>Hash::make('Jelszo12'),
        ]);
    }
}
