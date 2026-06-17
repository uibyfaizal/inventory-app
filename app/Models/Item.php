<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name',
        'stock',
        // 'price',
        'category_id'
    ];

    public function transaction() 
    {
        return $this->hasMany(Transaction::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
