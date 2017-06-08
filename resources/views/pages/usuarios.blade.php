@extends('layouts.app')
@section('content')
<div class="container">
        <button class="btn btn-info" 
                        onclick="location.href= '/usuarios/create' ">
                        Añadir Usuario</button>
    
        <table class="table">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Tipo</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($usuarios as $user)
                    @if($user->active == 1)      
                        <tr class="success">
                    @else
                        <tr class="warning">

                    @endif
                    
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    @if($user->Tipo == 1)  
                        <td>Administrador</td>
                    @else
                        <td>Usuario</td>
                    @endif
                        <td>
                                
                        <button class="btn btn-danger" 
                        onclick="location.href= '/usuarios/{{$user->id}}/deshabilitar' ">
                        Deshabilitar</button>
                        
                            <button type="button" class="btn btn-success" onclick="location.href= '/usuarios/edit/{{$user->id}}' ">Editar</button>
                        </td>
                    </tr>
            
        @endforeach
        </tbody>
        </table>
        {{ $usuarios->links() }}
        
</div>

  @endsection