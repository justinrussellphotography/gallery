<?php
    
namespace App\Traits;

use Illuminate\Database\Eloquent\Mode;
use Illuminate\Support\Str;

trait HasUuid {
    /**
     * Disable incrementing for the model's primary key.
     *
     * @return bool
     */
    public function getIncrementing() {
        return false;
    }
    
    /**
     * Set the key type to string for the model.
     *
     * @return string
     */
    public function getKeyType() {
        return 'string';
    }
 
    /**
     * Set the primary key to uuid.
     */
    public static function boot()
    {
        parent::boot();
        
        static::creating(function ($model) {
            $model->setAttribute($model->getKeyName(), Str::uuid());
            
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string)Str::uuid();
            }
        });
    }
}