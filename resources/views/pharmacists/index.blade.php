@extends('layouts.app')
@section('content')
    <div class="container">
        Vaistininko puslapis
        {!! Form::open(['action' => 'PharmacistsController@index', 'class'=> 'form-inline my-4 my-lg-3', 'method' => 'GET']) !!} 
        <div class="form-group">
            {{ Form::label('search', 'Greita paciento recepto paieska:')}}
            {{ Form::search('search', '', ['class' => 'form-control mr-sm-2', 'type' => 'search', 'placeholder' => 'Ieskoti..', 'autocomplete' => 'off'])}}
        </div>
        {{ Form::submit('Ieskoti', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!} 

        @if(isset($search) && !empty($patients))
        <hr>
            <p>Rasta:</p>
            @foreach($patients as $patient)
            {{ $patient->name }} {{ $patient->lastname }} {{ $patient->birthdate }} 
            <a href="/pharmacists/patient_recepts/{{ $patient->id }}">Perziureti receptus</a> <br>
            @endforeach
            <hr>
        @elseif(isset($search) && empty($patients))
            <h3>Pagal jusu uzklausa '{{$search}}' rezultatu nerasta</h3>
            <hr>
        @endif 
    </div>
@endsection