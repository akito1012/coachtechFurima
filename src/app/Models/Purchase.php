<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    public function items(){
        return $this->belongsTo(Item::class);
    }

    protected $fillable = ['profile_id', 'item_id', 'payment'];

    protected static function boot()
    {
        parent::boot();

        self::saving(function($purchases) {
            $purchases->profile_id = \Auth::id();
        });
    }
}
