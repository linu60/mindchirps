<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['title', 'excerpt', 'image', 'subcategory_id'];

 public function category()
{
    return $this->belongsTo(Category::class);
}

public function subcategory()
{
    return $this->belongsTo(Subcategory::class);
}
}
