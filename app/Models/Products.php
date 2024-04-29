<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Products extends Model
{
    use Sluggable;
    protected $table = "products";
    protected $fillable = [
        'name',
        'slug',
        'description',
        'MenuCat',
        'price',
        'image',
        'status'
    ];

    public function menus()
    {
        return $this->belongsTo(Menus::class, 'MenuCat', 'id');
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
