<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  protected $connection = 'mysql';
  protected $primaryKey = 'course_id';
  protected $table = 'course';
  protected $fillable = array(
      'course_name',
      'category',
      'subcategory',
  );

  public $timestamps = false;


/*

    public function categories(){
      return $this->hasOne('App\Category');
    }

    public function subcategories(){
      return $this->hasOne('App\SubCategory');
    }
*/
    public function sections(){
      return $this->hasMany('App\Section');
    }
}
