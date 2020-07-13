<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name','sex','image','description','race','type'
    ];

    public function scopeNombresM($query, $nombresM) {
    	if ($nombresM) {
    		return $query->where('name','like',"%$nombresM%");
    	}
    }

    public function User(){
        return $this->belongsTo('App\User');
    }
}
