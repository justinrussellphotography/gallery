<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
    
    public function photos() {
        return $this->hasMany(Photo::class);
    }
    
    public function product() {
        return $this->hasMany(Product::class)->withTimestamps();
    }
}
