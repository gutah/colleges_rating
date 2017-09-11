<?php

namespace App;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
  //protected $softDelete = true;
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
