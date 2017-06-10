<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    
    <div id="content" class="col-md-3 well">
                {{ $cupon->title }}
                <hr>
                <img class="img-responsive" src={{ $cupon->img}} alt="Imagen descriptiva"><br>
                <h2 class=" center-block">{{ $cupon->price }}</h2>            
                

                
            </div>
    
    </body>
</html>