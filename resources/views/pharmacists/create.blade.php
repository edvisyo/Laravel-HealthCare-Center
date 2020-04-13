@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Naujo Vaistininko registravimas</h3>

        <a href={{ url('/home') }}>Gryzti</a>

    {!! Form::open(['action' => 'PharmacistsRegisterController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{ Form::label('name', 'Vaistininko vardas:')}}
        {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Vardas', 'autocomplete' => 'off'])}}
    </div>
    <div class="form-group">
        {{ Form::label('lastname', 'Vaistininko pavarde:')}}
        {{ Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => 'Pavarde', 'autocomplete' => 'off'])}}
    </div>
    <div class="form-group">
        {{ Form::label('work', 'Darbovietes pavadinimas:')}}
        {{ Form::text('work', '', ['class' => 'form-control', 'placeholder' => 'Darboviete', 'autocomplete' => 'off'])}}
    </div>
    <br>
    <h5><span style="color:red">*</span>Vartotojo prieigai reikalingi duomenys:</h5>
    <hr>
    <div class="form-group">
        {{ Form::label('email', 'Elektroninio pasto adresas:')}}
        {{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'El.Pastas', 'autocomplete' => 'off'])}}
    </div>
    <div class="form-group">
        {{ Form::label('password', 'Slaptazodis:')}}
        {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Slaptazodis'])}}
    </div>
    {{ Form::submit('Registruoti', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
@endsection 