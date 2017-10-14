<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\College::class, 5)->create();
      
      DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'g-maciel@outlook.com',
            'password' => bcrypt('secret'),
            'role' => 1
      ]);


    }
}
