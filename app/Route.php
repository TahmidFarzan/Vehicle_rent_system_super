<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='routes';
    protected $fillable = ['origin','destination','distance','time'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

     public function admin(){
        return $this->belongsTo('App\Admin'); 
    }

}
