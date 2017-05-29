@extends('layouts.default')
@section('content')

<div class="well">
 
    {!! Form::open(['url' => '/usuarios/insert', 'class' => 'form-horizontal']) !!}
    
    <fieldset>
 
        <legend>Create new user</legend>
        
        <!-- Name -->
        <div class="form-group">
            {!! Form::label('name', 'Name:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
            </div>
        </div>

        <!-- Email -->
        <div class="form-group">
            {!! Form::label('email', 'Email:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
            </div>
        </div>
 
        <!-- Password -->
        <div class="form-group">
            {!! Form::label('password', 'Password:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Password', 'type' => 'password']) !!}
                
            </div>
        </div>

        <!-- Tipo Usuarios -->
        <div class="form-group">
            {!! Form::label('radios', 'Radios', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                <div class="radio">
                    {!! Form::label('radio1', 'Administrador') !!}
                    {!! Form::radio('Tipo', 'option1', true, ['id' => 'Administrador']) !!}
 
                </div>
                <div class="radio">
                    {!! Form::label('radio2', 'Usuario') !!}
                    {!! Form::radio('Tipo', 'option2', false, ['id' => 'Usuario']) !!}
                </div>
            </div>
        </div>
        
 
        <!-- Submit Button -->
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info'] ) !!}
            </div>
        </div>
 
    </fieldset>
 
    {!! Form::close()  !!}
 
</div>

    

@stop