@extends('layouts.default')
@section('content')


    <div class="row">
    
        @foreach ($cupones as $cu)
        <div id="content" class="col-md-3 well" >
                <a href="/cupon/{{$cu->pageid}}">{{ str_limit($cu->title, 60) }}</a>

                
                <hr>
                <img class="img-responsive" src={{ $cu->imgsrc}} alt="Chania"><br>
                <h2 class=" center-block">{{ $cu->price }}</h2>               
                

                
            </div>
        
        @endforeach
        {{ $cupones->links() }}
        
        
    </div>
    

@stop