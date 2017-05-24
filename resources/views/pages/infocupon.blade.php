@extends('layouts.default')
@section('content')


    <!--<div class="row"> !-->
    
        <div id="content" class="col-md-12 well" >
                <h1>{{ str_limit($cupon->title) }}</h1>

                
                <hr>
                <h4>{{$cupon->subtitle }}</h4>
                <div class="col-md-8" >
                    <img class="img-responsive" src={{ $cupon->imgsrc}} alt="a picture">
                </div>
                <div class="col-md-4 well" >
                    <h3>{{ $cupon->price }}</h3>ahorre {{ $cupon->save }} <h4><s>{{$cupon->normalprice }}</s></h4><br>
                    <h3>Vendidos: {{ $cupon->sold }}</h3>

                </div>
                '','save', 'city', 'period',
    'category', 'websitesrc', 'active', 'pageid',

                
            </div>
        
        
        
        
   <!-- </div>  -->
    

@stop