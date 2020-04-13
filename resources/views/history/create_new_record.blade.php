@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Paciento registravimas vizitui</h3>
    {!! Form::open(['action' => 'VisitsRegisterController@store', 'method' => 'POST']) !!}
    <div class="form-row">
        <div class="form-group col-md-4">
            {{ Form::label('name', 'Paciento vardas:')}}
            {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Vardas', 'autocomplete' => 'off'])}}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('lastname', 'Paciento pavardė:')}}
            {{ Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => 'Pavardė', 'autocomplete' => 'off'])}}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('birthdate', 'Paciento gimimo data:')}}
            {{ Form::date('birthdate', '', ['class'=>'form-control'])}}
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            {{ Form::label('desease_code', 'TLK-10 Ligos kodas:')}}
            {{ Form::text('desease_code', '', ['class' => 'form-control', 'placeholder' => 'Ligos kodas'])}}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('duration', 'Vizito trukmė:')}}
            {{ Form::time('duration', '', ['class' => 'form-control', 'placeholder' => 'Trukmė'])}}
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            {{ Form::label('compensation', 'Ar vizitas kompensuojamas valstybinės ligonių kasos?')}}
            {{ Form::select('compensation', ['Taip' => 'Taip', 'Ne' => 'Ne'], '', ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('repeated', 'Ar vizitas pakartotinis dėl tos pačios priežasties?')}}
            {{ Form::select('repeated', ['Taip' => 'Taip', 'Ne' => 'Ne'], '', ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('description', 'Vizito aprašymas:')}}
        {{ Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Trumpas vizito aprašymas...', 'autocomplete' => 'off'])}}
    </div>
    {{ Form::submit('Registruoti', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!} 
</div>
@endsection