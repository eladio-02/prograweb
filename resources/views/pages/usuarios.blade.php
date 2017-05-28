@extends('layouts.app')
@section('content')
<div class="container">
    
        <table class="table">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Tipo</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($usuarios as $user)
                    @if(user->active == 1)      
                        <tr class="success">
                    @else
                    

                @endif
                <td>Success</td>
                <td>Doe</td>
                <td>john@example.com</td>
            </tr>
            <tr class="danger">
                <td>Danger</td>
                <td>Moe</td>
                <td>mary@example.com</td>
            </tr>
            <tr class="info">
                <td>Info</td>
                <td>Dooley</td>
                <td>july@example.com</td>
            </tr>
            <tr class="warning">
                <td>Warning</td>
                <td>Refs</td>
                <td>bo@example.com</td>
            </tr>
            <tr class="active">
                <td>Active</td>
                <td>Activeson</td>
                <td>act@example.com</td>
            </tr>
            </tbody>
        @endforeach
        {{ $usuarios->links() }}
        </table>
        
</div>

  @endsection