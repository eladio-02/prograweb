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
                

                <h1>Hola soy {{ $data['name'] }}</h1>
                <hr>
                

                <h2 class=" center-block">{{ $data['message'] }}</h2>            
                
                <h3>Deseo recibir información al correo: {{ $data['email'] }}</h3>
                
            </div>
    
    </body>
</html>