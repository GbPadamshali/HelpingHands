<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
  use SoftDeletes;

  /**
   * The attributes that should be mutated to dates.
   *
   * @var array
   */
  protected $dates = ['deleted_at'];

  protected $fillable = [
    'hospital_id', 'appointment_id', 'patient_id', 'patient_name',
    'visiting_doctor', 'visiting_date', 'visiting_from', 'visiting_to',
    'diseases', 'remark',
  ];
}
