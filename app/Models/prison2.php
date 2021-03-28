<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prison2 extends Model
{
    use HasFactory;
    protected $table = 'prisoners';
    protected $fillable = ['fname','mname','lname','age','sex','height','face_color','education_level','region','crime_type','parent_phone'];
}
