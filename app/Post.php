<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name','sex','image','description','race','type'
    ];

    //Scope Busqueda Normal
    public function scopeNombresM($query, $nombresM) {
    	if ($nombresM) {
    		return $query->where('name','like',"%$nombresM%");
        }
    }
    
    //Scopes Busqueda Avanzada
    public function scopeRasas($query, $race) {
        if ($race) {
            return $query->where('race','like',"%$race%");
        }
    }

    public function scopeTypes($query, $type) {
        if ($type) {
            return $query->where('type','like',"%$type%");
        }
    }

    public function scopeSexos($query, $sex) {
        if ($sex) {
            return $query->where('sex','like',"%$sex%");
        }
    }

    //Relacion con modelos
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function comentarios(){
        return $this->embedsMany('App\Comentarios');
    }
}
