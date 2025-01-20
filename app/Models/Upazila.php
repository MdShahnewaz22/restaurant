<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upazila extends Model
{
    use HasFactory;

    protected $fillable=['name','bn_name','url','status','sorting','created_at','updated_at','deleted_at','district_id'];
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
    public function district()
    {
        return  $this->belongsTo(District::class, 'district_id');
    }
}
