@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Naujo Paciento registravimas</h3>
{!! Form::open(['action' => 'PatientsRegisterController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{ Form::label('personal_code', 'Paciento asmens kodas:')}}
    {{ Form::text('personal_code', '', ['class' => 'form-control', 'placeholder' => 'A.K.', 'autocomplete' => 'off'])}}
</div>
<div class="form-group">
    {{ Form::label('birthdate', 'Paciento gimimo data:')}}
    {{ Form::date('birthdate', '', ['class' => 'form-control', 'placeholder' => 'Gimimo data', 'autocomplete' => 'off'])}}
</div>
<div class="form-group">
    {{ Form::label('name', 'Paciento vardas:')}}
    {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Vardas', 'autocomplete' => 'off'])}}
</div>
<div class="form-group">
    {{ Form::label('lastname', 'Paciento pavarde:')}}
    {{ Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => 'Pavarde', 'autocomplete' => 'off'])}}
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