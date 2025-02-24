<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_item', 'item_id', 'category_id');
    }

    protected $fillable = [
        'condition_id',
        'img',
        'name',
        'bland',
        'price',
        'explanation',
    ];

    protected static function boot()
    {
        parent::boot();

        self::saving(function($items) {
            $items->user_id = \Auth::id();
        });
    }
}
