<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemUser extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        self::saving(function($item_user) {
            $item_user->user_id = \Auth::id();
        });
    }
}
