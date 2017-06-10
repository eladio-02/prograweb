@extends('layouts.default')
@section('content')
    @if (!Auth::guest())
        @if (Auth::user()->Tipo==1)
        <div class="row">
            <button type="button" class="btn btn-info" onclick="location.href= '/cupones/create' ">Crear Cupon</button>

        </div>
        @endif
    <br>
    @endif
    <div class="row">
    
        @foreach ($cupones as $cu)
        @if ($cu->active==1)
        <div id="content" class="col-md-3 well"'>
                <a href="/cupon/{{$cu->id}}">{{ str_limit($cu->title, 60) }}</a>
                <hr>
                <img class="img-responsive" src={{ $cu->imgsrc}} alt="Imagen descriptiva"><br>
                <h2 class=" center-block">{{ $cu->price }}</h2>
                <div class="row pull-right">
                      @if (!Auth::guest())
                        @if (Auth::user()->Tipo==1)
                      <button type="button" class="btn btn-warning btn-xs glyphicon glyphicon-pencil" onclick="location.href= '/cupon/edit/{{$cu->id}}' "></button>
                      <button type="button" class="btn btn-danger btn-xs glyphicon glyphicon-trash" onclick="location.href='{{action('CuponesController@destroy', ['id' => $cu->id]) }}'"></button>
                        <button type="button" class="btn btn-info btn-xs glyphicon glyphicon-envelope" onclick="location.href='{{action('CuponesController@sendEmailReminder', [ 'id' => Auth::user()->id,'cuponidmail'=>$cu->id ]) }}'"></button>
                        
                      @else
                        <button type="button" class="btn btn-info btn-xs glyphicon glyphicon-envelope" onclick="location.href='{{action('CuponesController@sendEmailReminder', [ 'id' => Auth::user()->id,'cuponidmail'=>$cu->id ]) }}'"></button>
                      @endif

                         
                      @endif
                      
                </div>                  
                

                
            </div>
        @else
        @if (!Auth::guest())
            @if (Auth::user()->Tipo==1)
        <div id="content" class="col-md-3 well" style ='background-color: #FC6363;'>
                <a href="/cupon/{{$cu->id}}">{{ str_limit($cu->title, 60) }}</a>

                
                <hr>
                <img class="img-responsive" src={{ $cu->imgsrc}} alt="Imagen descriptiva"><br>
                <h2 class=" center-block">{{ $cu->price }}</h2>
                <div class="row pull-right">
                @if (!Auth::guest())

                        @if (Auth::user()->Tipo==1)
                      <button type="button" class="btn btn-warning btn-xs glyphicon glyphicon-pencil" onclick="location.href= '/cupon/edit/{{$cu->id}}' " disabled="true"></button>
                      <button type="button" class="btn btn-success btn-xs glyphicon glyphicon-ok" onclick="location.href='{{action('CuponesController@destroy', ['id' => $cu->id]) }}'"></button>
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
    <div class="navbar-fixed-bottom text-center">{{ $cupones->links() }}</div>
    

@stop