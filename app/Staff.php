<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{
  use SoftDeletes;

  /**
   * The attributes that should be mutated to dates.
   *
   * @var array
   */
  protected $dates = ['deleted_at'];

  protected $fillable = [
    'first_name', 'last_name', 'email', 'mobile', 'staff_role',
    'birthdate', 'gender', 'marital_status', 'qualification',
    'experience', 'address', 'joining_date', 'left_date', 'status'
  ];
}
