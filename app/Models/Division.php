<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $fillable=['name','bn_name','url','status','sorting','created_at','updated_at','deleted_at'];

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
}
