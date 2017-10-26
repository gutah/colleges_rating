<?php

use Illuminate\Database\Seeder;

class CollegeTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */


  public function run(Faker\Generator $faker){
    function randomGen($min, $max, $quantity) {
      $numbers = range($min, $max);
      shuffle($numbers);
      return array_slice($numbers, 0, $quantity);
    }

      $a=0;
      //factory(App\College::class, 20)->create();
      for ($i=0; $i <= 20; $i++) {
        $name = $faker->company;
        $uni = $college[$i] = App\College::create([
          'name' => $name,
          'description' => $faker->text(),
          'type' =>rand(0,1),
          'slug' => App\College::setSlug($name),
          'city' => $faker->city,
          'state'=> $faker->state,
          'address' => $faker->address,
          'phone' => $faker->e164PhoneNumber

        ]);

        for ($c=0; $c < 5; $c++) {

          $uni->courses()->attach($c+2);
        }

    }
  }
}
