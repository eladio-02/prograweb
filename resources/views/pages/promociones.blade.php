@extends('layouts.default')
@section('content')


    <div class="row">
    
        @foreach ($promociones as $promo)
        <div id="content" class="col-md-3 well" >
                <a href="/promocion/{{$promo->pageid}}">{{ str_limit($promo->title, 60) }}</a>

                
                <hr>
                <img class="img-responsive" src={{ $promo->img}} alt="Chania"><br>
                <h2 class=" center-block">{{ $promo->price }}</h2>               
                

                
            </div>
        
        @endforeach
        {{ $promociones->links() }}
        
        
    </div>
    

@stop