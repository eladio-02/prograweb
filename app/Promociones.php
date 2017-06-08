<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promociones extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'promocion';
    public $timestamps = false;
    protected $fillable = [
    'title', 'discount','img','price','normalprice','save', 'sold_amount', 'location', 'period', 'info', 'active', 'id',
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
