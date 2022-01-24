<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory, HasUuid;
    
    public function collection() {
        return $this->belongsTo(Collection::class);
    }
    
    public function items() {
        return $this->hasMany(Item::class);
    }
    
    public function products() {
        return $this->hasMany(Product::class);
    }
}
