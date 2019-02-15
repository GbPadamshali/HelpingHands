<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDetails extends Model
{
  use SoftDeletes;

  /**
   * The attributes that should be mutated to dates.
   *
   * @var array
   */
  protected $dates = ['deleted_at'];

  protected $fillable = [
    'user_id', 'first_name', 'last_name', 'gender', 'age',
    'mobile', 'email', 'blood_group', 'dob', 'address', 'landmark',
    'area', 'city', 'state', 'country', 'pincode'
  ];
}
