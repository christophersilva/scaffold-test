<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'link',
        'summary',
        'discipline_id',
        'user_id',
    ];

    public function code(){
        parse_str( parse_url( $this->link, PHP_URL_QUERY ), $vars );
        return $vars['v'];
    }

    public function discipline(){
        return $this->belongsTo('App\Models\Discipline');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
