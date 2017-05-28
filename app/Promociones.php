<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Promociones extends Model
{
    use Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'promocion';
    protected $fillable = [
    'title', 'discount','img','price','normalprice','save', 'sold_amount', 'location', 'period',
    'category', 'info', 'active', 'pageid',
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
