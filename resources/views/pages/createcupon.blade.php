@extends('layouts.app')
@section('content')
<div class="container">
    

        {{ Form::open(array('action' => array('CuponesController@store'), 'method' => 'POST', 'class' => 'form-horizontal')) }}
    
    <fieldset>
 
        <legend>Crear nuevo cupon</legend>
        

        <!-- Titulo -->
        <div class="form-group">
            {!! Form::label('title', 'Titulo:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('title', $value = null, ['class' => 'form-control', 'placeholder' => 'Titulo', 'required' => 'required']) !!}
            </div>
        </div>

        <!-- Subtitulo -->
        <div class="form-group">
            {!! Form::label('subtitle', 'Subtitulo:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('subtitle', $value = null, ['class' => 'form-control', 'placeholder' => 'Subtitulo', 'required' => 'required']) !!}
            </div>
        </div>

        <!-- imgsrc -->
        <div class="form-group">
            {!! Form::label('imgsrc', 'Fuente de la imagen:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('imgsrc', $value = null, ['class' => 'form-control', 'placeholder' => 'Fuente de la imagen', 'required' => 'required']) !!}
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

        <!-- sold -->
        <div class="form-group">
            {!! Form::label('sold', 'Vendidos:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('sold', $value = null, ['class' => 'form-control', 'placeholder' => 'Vendidos', 'required' => 'required']) !!}
            </div>
        </div>
        <!-- city -->
        <div class="form-group">
            {!! Form::label('city', 'Ciudad:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('city', $value = null, ['class' => 'form-control', 'placeholder' => 'Ciudad', 'required' => 'required']) !!}
            </div>
        </div>

        <!-- period -->
        <div class="form-group">
            {!! Form::label('period', 'Periodo:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('period', $value = null, ['class' => 'form-control', 'placeholder' => 'Periodo', 'required' => 'required']) !!}
            </div>
        </div>

        <!-- category -->
        <div class="form-group">
            {!! Form::label('category', 'Categoria:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('category', $value = null, ['class' => 'form-control', 'placeholder' => 'Categoria', 'required' => 'required']) !!}
            </div>
        </div>

        <!-- websitesrc -->
        <div class="form-group">
            {!! Form::label('websitesrc', 'Sitio Web:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('websitesrc', $value = null, ['class' => 'form-control', 'placeholder' => 'Sitio Web', 'required' => 'required']) !!}
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