<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Cupones extends Model
{
    use Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'cupon';
    protected $fillable = [
    'title', 'subtitle','imgsrc','price','normalprice','save', 'sold', 'city', 'period',
    'category', 'websitesrc', 'active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'date', 'pageid',
    ];
    //
}
