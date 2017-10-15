<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //factory(App\College::class, 5)->create();
      $admin_role = App\Role::where('name','admin')->first();
      $user_role  = App\Role::where('name','user')->first();

      $admin = User::create([
        'name' => 'Admin',
        'email' => 'admin@outlook.com',
        'password' => bcrypt('secret'),
        'role' => $admin_role->id
      ]);
    $admin->roles()->attach($admin_role->id);

    $user = User::create([
          'name' => 'User',
          'email' => 'user@outlook.com',
          'password' => bcrypt('secret'),
          'role' => $user_role->id
    ]);

    $user->roles()->attach($user_role->id);

  }
}
