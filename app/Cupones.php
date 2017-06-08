<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Cupones extends Model
{
    
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'cupon';
    public $timestamps = false;
    protected $fillable = [
    'title', 'subtitle','imgsrc','price','normalprice','save', 'sold', 'city', 'period',
    'category', 'websitesrc', 'active', 'id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'date',
    ];
    //
}
