<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menus extends Model
{
    use Sluggable;
    protected $table = "menuses";

    protected $fillable = [
        'name',
        'slug',
        'image',
        'status'
    ];

    public function products()
    {
        return $this->hasMany(Products::class,'MenuCat','id');
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
