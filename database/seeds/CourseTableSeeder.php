<?php

use Illuminate\Database\Seeder;
use App\Course;
use Faker\Factory;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

      factory(App\Course::class, 20)->create();

    }
}
