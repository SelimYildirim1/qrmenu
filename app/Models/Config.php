<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = "configs";
    protected $fillable = [
        'logo',
        'icon',
        'menu',
        'adress',
        'mail',
        'phone',
        'baslangic_saati',
        'bitis_saati',
        'harita',
        'instagram',
        'facebook',
        'twitter'
    ];
}
