@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Naujo Gydytojo registravimas</h3>
    {!! Form::open(['action' => 'DoctorsRegisterController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{ Form::label('name', 'Gydytojo vardas:')}}
        {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Vardas', 'autocomplete' => 'off'])}}
    </div>
    <div class="form-group">
        {{ Form::label('lastname', 'Gydytojo pavarde:')}}
        {{ Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => 'Pavarde', 'autocomplete' => 'off'])}}
    </div>
    <div class="form-group">
        {{ Form::label('specialization', 'Specializacija:')}}
        {{ Form::select('specialization', ['Seimos daktaras' => 'Seimos daktaras','Kardiologas'=>'Kardiologas','Traumatologas'=>'Traumatologas','Akiu ligu specelistas'=>'Akiu ligu specialistas'], '', ['class'=>'form-control','placeholder'=>'Pasirinkite specializacija...'])}}
    </div>
    <p>Jeigu nerandate specializacijos, paspauskite mygtuka irasyti:</p>
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