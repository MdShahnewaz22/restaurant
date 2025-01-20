<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Union extends Model
{
    use HasFactory;

    protected $fillable=['name','bn_name','url','status','sorting','created_at','updated_at','deleted_at','upazila_id'];


    protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            $model->created_at=date('Y-m-d H:i:s');
        });

        static::updating( function ( $model ) {
            $model->updated_at=date('Y-m-d H:i:s');
        } );
    }

    public function upazila()
    {
        return  $this->belongsTo(Upazila::class, 'upazila_id');
    }
}
