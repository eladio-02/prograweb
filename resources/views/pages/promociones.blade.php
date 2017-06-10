@extends('layouts.default')
@section('content')
    @if (!Auth::guest())
        @if (Auth::user()->Tipo==1)
        <div class="row">
            <button type="button" class="btn btn-info" onclick="location.href= '/promocion/create' ">Crear Promocion</button>

        </div>
        @endif
    <br>
    @endif

    <div class="row">
    
        @foreach ($promociones as $promo)
        @if ($promo->active==1)
        <div id="content" class="col-md-3 well" >
                <a href="/promocion/{{$promo->id}}">{{ str_limit($promo->title, 60) }}</a>
                <hr>
                <img class="img-responsive" src={{ $promo->img}} alt="Chania"><br>
                <h2 class=" center-block">{{ $promo->price }}</h2>               
                <div class="row pull-right">
                      @if (!Auth::guest())
                        @if (Auth::user()->Tipo==1)
                      <button type="button" class="btn btn-warning btn-xs glyphicon glyphicon-pencil" onclick="location.href= '/promocion/edit/{{$promo->id}}' "></button>
                      <button type="button" class="btn btn-danger btn-xs glyphicon glyphicon-trash" onclick="location.href='{{action('PromocionesController@destroy', ['id' => $promo->id]) }}'"></button>
                      @endif
                      <button type="button" class="btn btn-info btn-xs glyphicon glyphicon-envelope" onclick="location.href='{{action('PromocionesController@sendEmailReminder', [ 'id' => Auth::user()->id,'promoidmail'=>$promo->id ]) }}'"></button>
                      @endif
                </div>   

                
            </div>
        @else
        @if (!Auth::guest())
            @if (Auth::user()->Tipo==1)
            <div id="content" class="col-md-3 well" style ='background-color: #FC6363;'>
                <a href="/promocion/{{$promo->id}}">{{ str_limit($promo->title, 60) }}</a>
                <hr>
                <img class="img-responsive" src={{ $promo->img}} alt="Chania"><br>
                <h2 class=" center-block">{{ $promo->price }}</h2>               
                <div class="row pull-right">
                      @if (!Auth::guest())
                        @if (Auth::user()->Tipo==1)
                      <button type="button" class="btn btn-warning btn-xs glyphicon glyphicon-pencil" onclick="location.href= '/promocion/edit/{{$promo->id}}' " disabled="true"></button>
                      <button type="button" class="btn btn-success btn-xs glyphicon glyphicon-ok" onclick="location.href='{{action('PromocionesController@destroy', ['id' => $promo->id]) }}'"></button>
                      @endif
                      @endif
                </div>   

                
            </div> 
                @endif
            @endif
        @endif
        @endforeach
        
        
        
    </div>

    <br>
    <br>
    <div class="navbar-fixed-bottom text-center">{{ $promociones->links() }}</div>
    

@stop