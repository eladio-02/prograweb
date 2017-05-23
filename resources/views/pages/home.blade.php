@extends('layouts.default')
@section('content')

@for ($i = 0; $i < 4; $i++)
    <div class="row">
        @for ($j = 0; $j < 4; $j++)
            <div id="content" class="col-md-3 well">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque posuere ligula erat, sit amet viverra neque imperdiet a. Etiam varius ullamcorper dolor, a pretium enim faucibus nec.
                
                
                <hr>
                <img class="img-responsive" src="http://www.mastiposde.com/wp-content/uploads/Paisaje-Natural.jpg" alt="Chania"><br>
                <h2 class=" center-block">$ 9.99</h2>
                
                <button type="button" class="btn btn-info center-block">Info</button>

                
            </div>
        @endfor
    
        
        
    </div>
@endfor
    

@stop