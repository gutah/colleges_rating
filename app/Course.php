<?php

namespace App;

class Course extends Model
{
    public function colleges(){

    return $this->belongsToMany(College::class);

  }

  public static function getCourse(){

    $response = College::all();
    return $response;

  }


}
