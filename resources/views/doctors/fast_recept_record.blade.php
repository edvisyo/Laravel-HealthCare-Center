@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Sukurti nauja recepta pacientui <small>'{{ $name }} {{ $lastname }} {{ $birthdate }}'</small></h3>
        <a href="{{ url('doctors/patients_list') }}">Gryzti</a>
        {!! Form::open(['action.fast_recept_record' => 'PatientsListController@storeRecept', 'method' => 'POST']) !!}
    <div class="form-row">
        <div class="form-group col-md-4">
            {{ Form::label('name', 'Paciento vardas:')}}
            {{ Form::text('name', $name, ['class' => 'form-control', 'placeholder' => 'Vardas', 'autocomplete' => 'off'])}}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('lastname', 'Paciento pavardė:')}}
            {{ Form::text('lastname', $lastname, ['class' => 'form-control', 'placeholder' => 'Pavardė', 'autocomplete' => 'off'])}}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('birthdate', 'Paciento gimimo data:')}}
            {{ Form::date('birthdate', $birthdate, ['class'=>'form-control'])}}
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            {{ Form::label('substance', 'Vaisto veiklioji medžiaga:')}}
            {{ Form::text('substance', '', ['class' => 'form-control', 'placeholder' => 'Veiklioji medžiaga', 'autocomplete' => 'off'])}}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('quantity', 'Veikliosios medžiagos kiekis vienoje dozėje:')}}
            {{ Form::number('quantity', '', ['class' => 'form-control', 'placeholder' => 'Teigiamas skaičius', 'autocomplete' => 'off'])}}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('unit', 'Veikliosios medžiagos matavimo vienetas:')}}
            {{ Form::select('unit', ['miligramai' => 'Miligramai', 'mikrogramai' => 'Mikrogramai', 'tv/iu' => 'TV/IU'], '', ['class' => 'form-control', 'placeholder' => 'Matavimo vienetas'])}}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('description', 'Vartojimo aprašymas:')}}
        {{ Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Trumpas vartojimo aprašymas...', 'autocomplete' => 'off'])}}
    </div>
        <div class="form-group col-md-6">
            {{ Form::label('expired', 'Receptas galioja iki:')}}
            {{ Form::date('expired', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('termless', 'Pažymėti, jei receptas neterminuotas:')}}
            {{ Form::checkbox('termless', 'Neterminuotas')}}
        </div>
    {{ Form::submit('Registruoti', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!} 
    </div>
@endsection