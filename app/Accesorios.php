<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Accesorios extends Model
{
    protected $fillable = [
        'nombre','marca','precio','tipo','imagen','talla','color'
    ];

    public function scopeNombres($query, $nombres) {
    	if ($nombres) {
    		return $query->where('nombre','like',"%$nombres%");
    	}
    }
}
