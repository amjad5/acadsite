<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
  protected $connection = 'mysql';
  protected $primaryKey = 'lec_id';
  protected $table = 'lecture';
  protected $fillable = array(
      'lec_title',
      'sec_fk',
  );

  public $timestamps = false;
}
