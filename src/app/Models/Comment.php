<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function profiles(){
        return $this->belongsTo(Profile::class);
    }

    protected static function boot()
    {
        parent::boot();

        self::saving(function($comments) {
            $comments->user_id = \Auth::id();
            $comments->profile_id = \Auth::id();
        });
    }

    protected $fillable = ['item_id', 'comment'];
}
