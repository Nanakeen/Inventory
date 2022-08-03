<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;
class records extends Model
{
    use HasFactory;
    protected $table = 'records';
    public $timestamps = true;
    protected $fillable = [
      'svcnumber',
      'rank',
	  'surname',
      'othernames',
      'gender',
      'mobile',
      'unit',
      'arm',
      'email',
      'course_name',
      'location',
      'departure_date',
      'arrival_date',
      'amount',
      'certification',
      'sponsorship',
      'status',
      'remarks'
    ];
}
