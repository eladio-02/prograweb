@extends('layouts.default')
@section('content')


    <!--<div class="row"> !-->
    
        <div id="content" class="col-md-12 well" >
                <h1>{{ str_limit($promocion->title) }}</h1>

                
                <hr>
                <div class="col-md-8" >
                    <img class="img-responsive" src={{ $promocion->img}} alt="a picture">
                    <br>
                    <div class="text-justify">
                        <b>Información: </b>
                        <br>
                        <b>{{ $promocion->info }}</b>
                    </div>
                </div>
                
                <div class="col-md-4 well" >

                    <div class="table-responsive">
                        <table class="table">

                        
                            <tr>
                                <h2>Ahorre un {{ $promocion->save }}</h2>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Precio: </h3>
                                </td>
                                <td>
                                    <h3>{{ $promocion->price }}</h3>
                                </td>
                                <td>
                                    <h3><s>{{$promocion->normalprice }}</s></h3><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Vendidos: </b>
                                </td>
                                <td>
                                    <b>{{ $promocion->sold_amount }}</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Descuento: </b>
                                </td>
                                <td>
                                    <b>{{ $promocion->discount }}</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Ubicación: </b>
                                </td>
                                <td>
                                    <b>{{ $promocion->location }}</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Vigencia: </b>
                                </td>
                                <td>
                                    <b>{{ $promocion->period }}</b>
                                </td>
                            </tr>
                            

                        </table>
                    </div>

                </div>

                
            </div>
        
        
        
        
   <!-- </div>  -->
    

@stop