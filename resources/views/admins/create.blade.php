@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Naujo Administratoriaus registravimas</h3>
    {!! Form::open(['action' => 'AdminRegisterController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{ Form::label('email', 'Elektroninio pasto adresas:')}}
        {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'El.Pastas', 'autocomplete' => 'off'])}}
    </div>
    <div class="form-group">
        {{ Form::label('password', 'Slaptazodis:')}}
        {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Slaptazodis'])}}
    </div>
    {{ Form::submit('Registruoti', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
@endsection