<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function items()
    {
        return $this->belongsToMany(Item::class, 'item_profile');
    }

    protected static function boot()
    {
        parent::boot();

        self::saving(function($profiles) {
            $profiles->user_id = \Auth::id();
        });
    }


    protected $fillable = ['profile_img', 'post_code', 'address', 'building'];

    public function getImg()
    {
        return $this->profile_img;
    }
}
