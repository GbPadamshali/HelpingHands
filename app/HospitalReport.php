<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HospitalReport extends Model
{
  use SoftDeletes;

  /**
   * The attributes that should be mutated to dates.
   *
   * @var array
   */
  protected $dates = ['deleted_at'];

  protected $fillable = [
    'patient_id', 'patient_name', 'report_name', 'report_type',
    'issued_on', 'supervisor_name', 'file_name', 'file_path'
  ];
}
