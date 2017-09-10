<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

protected $softDelete = true;
  protected $guarded = [];


  public function getRouteKeyName(){

    return 'slug';

  }

  public static function setSlug ($name){
    $name_minusculo = strtolower($name);
    $slug = preg_replace('[ ]' , '-' , $name_minusculo);
    return $slug;

  }


}
