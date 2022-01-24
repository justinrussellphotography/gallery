<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    
    public function photo() {
        return $this->belongsTo(Photo::class);
    }
    
    public function product() {
        return $this->belongsTo(Product::class);
    }
}
