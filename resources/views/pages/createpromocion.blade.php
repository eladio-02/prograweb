@extends('layouts.app')
@section('content')
<div class="container">
    
        {{ Form::open(array('action' => array('PromocionesController@store'), 'method' => 'POST', 'class' => 'form-horizontal')) }}
        
    
    <fieldset>
 
        <legend>Crear nueva promocion</legend>
        

        <!-- Titulo -->
        <div class="form-group">
            {!! Form::label('title', 'Titulo:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('title', $value = null, ['class' => 'form-control', 'placeholder' => 'Titulo', 'required' => 'required']) !!}
            </div>
        </div>

        <!-- info -->
        <div class="form-group">
            {!! Form::label('info', 'Informacion:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('info', $value = null, ['class' => 'form-control', 'placeholder' => 'Informacion', 'required' => 'required']) !!}
            </div>
        </div>

        <!-- img -->
        <div class="form-group">
            {!! Form::label('img', 'Fuente de la imagen:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('img', $value = null, ['class' => 'form-control', 'placeholder' => 'Fuente de la imagen', 'required' => 'required']) !!}
            </div>
        </div>

        <!-- Price -->
        <div class="form-group">
            {!! Form::label('price', 'Precio:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('price', $value = null, ['class' => 'form-control', 'placeholder' => 'Precio', 'required' => 'required']) !!}
            </div>
        </div>
 
        <!-- normalprice -->
        <div class="form-group">
            {!! Form::label('normalprice', 'Precio Normal:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('normalprice', $value = null, ['class' => 'form-control', 'placeholder' => 'Precio Normal', 'required' => 'required']) !!}
            </div>
        </div>

        <!-- save -->
        <div class="form-group">
            {!! Form::label('save', 'Ahorro:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('save', $value = null, ['class' => 'form-control', 'placeholder' => 'Ahorro', 'required' => 'required']) !!}
            </div>
        </div>

        <!-- sold_amount -->
        <div class="form-group">
            {!! Form::label('sold_amount', 'Vendidos:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('sold_amount', $value = null, ['class' => 'form-control', 'placeholder' => 'Vendidos', 'required' => 'required']) !!}
            </div>
        </div>
        <!-- discount -->
        <div class="form-group">
            {!! Form::label('discount', 'Descuento:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('discount', $value = null, ['class' => 'form-control', 'placeholder' => 'Descuento', 'required' => 'required']) !!}
            </div>
        </div>
        <!-- location -->
        <div class="form-group">
            {!! Form::label('location', 'Ubicacion:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('location', $value = null, ['class' => 'form-control', 'placeholder' => 'Ubicacion', 'required' => 'required']) !!}
            </div>
        </div>

        <!-- period -->
        <div class="form-group">
            {!! Form::label('period', 'Periodo:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('period', $value = null, ['class' => 'form-control', 'placeholder' => 'Periodo', 'required' => 'required']) !!}
            </div>
        </div>

        

        <!-- Submit Button -->
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                {!! Form::submit('Crear', ['class' => 'btn btn-lg btn-info'] ) !!}
            </div>
        </div>
 
    </fieldset>
 
    {!! Form::close()  !!}
</div>
@endsection