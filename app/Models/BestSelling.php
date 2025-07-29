<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BestSelling extends Model
{
    protected $table = 'best_sellings';
    use HasFactory;

    protected $fillable = ['image','name','description','price', 'status','created_at','updated_at','deleted_at'];

    protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            $model->created_at = now();
        });

        static::updating(function ($model) {
            $model->updated_at = now();
        });
    }

    public function getImageAttribute($value)
    {

        return (!is_null($value)) ? env('APP_URL') . '/public/storage/' . $value : null;
    }




}
