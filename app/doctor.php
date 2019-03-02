<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class doctor extends Model
{
  use SoftDeletes;

  /**
   * The attributes that should be mutated to dates.
   *
   * @var array
   */
  protected $dates = ['deleted_at'];

  protected $fillable = [
    'hospital_id', 'first_name', 'last_name', 'email', 'birthdate',
    'gender', 'joining_date', 'qualifiaction', 'specialization',
    'experience', 'department_id', 'image_name', 'image_path'
  ];
}
