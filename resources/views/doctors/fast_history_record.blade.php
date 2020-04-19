@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Greitas istorijos irasas pacientui: <small>{{ $name }} {{ $lastname }} {{ $birthdate }}</small></h3>
        <a href="{{ url('doctors/patients_list') }}">Gryzti</a>
        {!! Form::open(['action.fast_history_record' => 'PatientsListController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{ Form::label('patient_name', 'Paciento vardas:') }}
                {{ Form::text('patient_name', $name, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('patient_lastname', 'Paciento pavarde:') }}
                {{ Form::text('patient_lastname', $lastname, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('patient_birthdate', 'Paciento gimimo data:') }}
                {{ Form::date('patient_birthdate', $birthdate, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('tlk_10', 'TLK 10 ligos kodas:') }}
                {{ Form::text('tlk_10', '', ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('duration', 'Vizito trukme:') }}
                {{ Form::time('duration', '', ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('compensation', 'Ar vizitas kompensuojamas:') }}
                {{ Form::select('compensation', ['Taip' => 'Taip', 'Ne' => 'Ne'], '', ['class' => 'form-control', 'placeholder' => '']) }}
            </div>
            <div class="form-group">
                {{ Form::label('repeated', 'Ar vizitas pakartotinis:') }}
                {{ Form::select('repeated', ['Taip' => 'Taip', 'Ne' => 'Ne'], '', ['class' => 'form-control', 'placeholder' => '']) }}
            </div>
            <div class="form-group">
                {{ Form::label('description', 'Vizito aprasymas:') }}
                {{ Form::textarea('description', '', ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('visit_date', 'Apsilankymo data:') }}
                {{ Form::date('visit_date', '', ['class' => 'form-control']) }}
            </div>
        {{ Form::submit('Registruoti', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection    