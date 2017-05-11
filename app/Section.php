<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
  protected $connection = 'mysql';
  protected $primaryKey = 'sec_id';
  protected $table = 'section';
  protected $fillable = array(
      'sec_title',
      'course_fk',
  );

  public $timestamps = false;

  public function lectures(){
    return $this->hasMany('App\Lecture');
  }

  public function course(){
    return $this->belongsTo('App\Course');
  }
}
