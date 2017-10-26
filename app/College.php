<?php

namespace App;

use App\Course;

class College extends Model
{

  public function courses(){
    return $this->belongsToMany(Course::class);
  }

  public function users(){
    return $this
      ->belogsToMany(User::class)
      ->withTimestamps();
  }


}
