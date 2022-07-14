<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class volunteer extends Model
{
    public $timestamps = false;
    protected $fillable =[
        'name',
        'education_field',
        'description',
        'pic',
        'address',
        'phone',
        'email',
    ];
    use HasFactory;
}
