<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pest extends Model
{
  use HasFactory;

  public $fillable = [
    'pest_name',
    'crop_attacked',
    'devastation_severity',
    'temperature_threshold_celsius',
    'humidity_threshold_percent',
    'prevention_measures',
    'emergency_treatment',
  ];

  public function pestinfo(): HasOne {
    return $this->hasOne(PestInfo::class);
  }

}
