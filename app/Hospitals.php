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
    'hospital_id', 'hospital_name', 'hospital_reg_id', 'type',
    'hospital_image', 'image_path', 'hospital_banner', 'banner_path',
    'address', 'landmark', 'area', 'city', 'state', 'country', 'pincode',
  ];
}