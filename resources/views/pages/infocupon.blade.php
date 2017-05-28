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

                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <h2>Ahorre un {{ $cupon->save }}</h2>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Precio: </h3>
                                </td>
                                <td>
                                    <h3>{{ $cupon->price }}</h3>
                                </td>
                                <td>
                                    <h3><s>{{$cupon->normalprice }}</s></h3><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Vendidos: </b>
                                </td>
                                <td>
                                    <b>{{ $cupon->sold }}</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Ubicación: </b>
                                </td>
                                <td>
                                    <b>{{ $cupon->city }}</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Vigencia: </b>
                                </td>
                                <td>
                                    <b>{{ $cupon->period }}</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Categoria: </b>
                                </td>
                                <td>
                                    <b>{{ $cupon->category }}</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Más información: </b>
                                </td>
                                <td>
                                    <a href="{{$cupon->websitesrc}}"><b>Click Aquí</b></a>
                                </td>
                            </tr>

                        </table>
                    </div>

                </div>

                
            </div>
        
        
        
        
   <!-- </div>  -->
    

@stop