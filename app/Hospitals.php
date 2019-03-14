<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hospitals extends Model
{
  use SoftDeletes;

  /**
   * The attributes that should be mutated to dates.
   *
   * @var array
   */
  protected $dates = ['deleted_at'];

  protected $fillable = [
    'user_id', 'reg_no', 'name', 'email', 'contact_no', 'tag_line',
    'description', 'type', 'image_name', 'image_path', 'banner_name',
    'banner_path', 'logo_Name', 'logo_path', 'address', 'landmark',
    'area', 'city', 'state', 'country', 'pincode', 'slug',
  ];
}
