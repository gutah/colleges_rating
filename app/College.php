<?php

namespace App;

use App\Course;

class College extends Model
{

  public function courses(){
    return $this->hasMany(Course::class);
  }


}
