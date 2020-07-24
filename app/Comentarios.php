<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Comentarios extends Model
{
    protected $fillable =[
        'comentario',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function post()
    {
        return $this->belongsTo('App\Post');
    }


}
