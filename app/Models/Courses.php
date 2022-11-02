<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    //use HasFactory;
    public $table='courses';
    public $primaryKey='id';
    public $incrementing=true;
    public $timestamps=true;
}
