<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    public function items(){
        $this->belongsToMany(Item::class, 'category_item', 'category_id', 'item_id');
    }
    protected $fillable = ['category'];
}
