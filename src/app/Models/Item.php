<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        self::saving(function($items) {
            $items->user_id = \Auth::id();
        });
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_item');
    }

    public function condition()
    {
        return $this->hasMany(Condition::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'item_user');
    }

    public function profile()
    {
        return $this->belongsToMany(Profile::class, 'item_profile');
    }

    protected $fillable = [
        'condition_id',
        'img',
        'name',
        'bland',
        'price',
        'explanation',
    ];

}
