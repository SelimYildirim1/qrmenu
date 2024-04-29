<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rezervation extends Model
{
    protected $table = "rezervation";
    protected $fillable = [
        'name',
        'phone',
        'person',
        'date',
        'time',
        'message',
        'ip'
    ];
}
