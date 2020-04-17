@extends('layouts.app')
@section('content')
    <div class="container">
        Priskirti pacienta daktarui
        <br>
        <a href={{ url('/home') }}>Gryzti</a>
        <br>

        {!! Form::open(['action' => 'AssignPatientToDoctorController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{ Form::label('patient_name', 'Paciento vardas:')}}
        {{ Form::text('patient_name', '', ['class' => 'form-control', 'placeholder' => 'Vardas', 'autocomplete' => 'off'])}}
    </div>
    <div class="form-group">
        {{ Form::label('patient_lastname', 'Paciento pavarde:')}}
        {{ Form::text('patient_lastname', '', ['class' => 'form-control', 'placeholder' => 'Pavarde', 'autocomplete' => 'off'])}}
    </div>
    <div class="form-group">
        {{ Form::label('patient_birthdate', 'Paciento gimimo data:')}}
        {{ Form::date('patient_birthdate', '', ['class' => 'form-control', 'placeholder' => 'Pavarde', 'autocomplete' => 'off'])}}
    </div>
    <div class="form-group">
        <label for="doctor_id">Gydytojas:</label>
        <select name="doctor_id" id="doctor_id" class="form-control">
            <option value="">Pasirinkite gydytoja..</option>
            @if(count($doctor_id) > 0)
                @foreach($doctor_id as $id)
                    <option value="{{ $id->user_id }}">{{ $id->name }} {{ $id->lastname }} - {{ $id->specialization }} {{ $id->other_specialization }}</option>
                @endforeach
            @endif
        </select>
    </div>
    {{-- <p>Jeigu nerandate specializacijos, paspauskite mygtuka irasyti:</p>
    <button type="button" id="otherSpec" class="btn btn-primary" style="margin-bottom: 20px;">Irasyti</button>
    <div id="hiddenSpecInput">
        <hr>
        <button type="button" id="closeHiddenSpecInput" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
            <div class="form-group">
                {{ Form::label('other_specialization', 'Gydytojo specializacija:')}}
                {{ Form::text('other_specialization', '', ['class' => 'form-control', 'placeholder' => 'specializacija', 'autocomplete' => 'off'])}}
            </div>
        <hr>
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
    </div> --}}
    {{ Form::submit('Registruoti', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
@endsection    