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
        'role' => $admin_role->id,
        'college_id' => random_int(1,15)
      ]);
      $admin->colleges()->attach($admin->college_id);
      $admin->roles()->attach($admin_role->id);

    $user = User::create([
          'name' => 'User',
          'email' => 'user@outlook.com',
          'password' => bcrypt('secret'),
          'role' => $user_role->id,
          'college_id' => random_int(1,15)
    ]);
    $user->colleges()->attach($user->college_id);
    $user->roles()->attach($user_role->id);

  }
}
