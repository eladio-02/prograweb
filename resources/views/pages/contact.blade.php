@extends('layouts.default')
@section('content')

<div class="row">
        <div class="col-lg-8">
    
        
            {{ Form::open(array('action' => array('HomeController@sendContact'), 'method' => 'POST', 'class' => 'form-horizontal')) }}

            
            
            <fieldset>
        
                <legend>Contact</legend>
                
                <!-- Name -->
                <div class="form-group">
                    {!! Form::label('name', 'Name:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'nombre']) !!}
                    </div>
                </div>

                <!-- Email -->
                <div class="form-group">
                    {!! Form::label('email', 'Email:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
                    </div>
                </div>
                <!-- Message -->
                <div class="form-group">
                    {!! Form::label('message', 'Mensaje:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        <textarea class="form-control" rows="5" id="message" placeholder="Mensaje"></textarea>
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
</div>
    

@stop