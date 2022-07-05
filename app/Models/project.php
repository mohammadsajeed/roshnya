<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    public $timestamps = false;
    protected $fillable = [

        'title',
        'description',
        'pic',
        'goal_money',
        'raised_money',
        'date'
    ];
    use HasFactory;
}
