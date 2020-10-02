<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class usertableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         user:: create([
             'name'=>"abc",
             'email'=>'abc@gmail.com',
             'password'=>Hash::make('password'),
             'remember_token'=>Str::random(10),

         ]);
    }
}
