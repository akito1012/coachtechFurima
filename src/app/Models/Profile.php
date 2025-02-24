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

    protected static function boot()
    {
        parent::boot();

        self::saving(function($profiles) {
            $profiles->user_id = \Auth::id();
        });
    }


    protected $fillable = ['profile_img', 'post_code', 'address', 'building'];

    
}
