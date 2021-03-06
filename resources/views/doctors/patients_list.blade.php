@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Pacientu sarasas</h3>
        {!! Form::open(['action.search_result' => 'PatientsListController@search', 'class'=> 'form-inline my-4 my-lg-3', 'method' => 'GET']) !!} 
        <div class="form-group">
            {{ Form::label('search', 'Greita paciento paieska:')}}
            {{ Form::search('search', '', ['class' => 'form-control mr-sm-2', 'type' => 'search', 'placeholder' => 'Ieskoti..', 'autocomplete' => 'off'])}}
        </div>
        {{ Form::submit('Ieskoti', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!} 
        @if(isset($search) && !empty($data))
        <hr>
            <p>Rasta:</p>
            @foreach($data as $dat)
            {{ $dat->patient_name }} {{ $dat->patient_lastname }} {{ $dat->patient_birthdate }}
            <a href="/doctors/patients_list/recepts/{{ $dat->id }}">Perziureti receptus</a>
            || <a href="/doctors/patients_list/create_record/{{ $dat->id }}">Uzregistruoti vizitui</a>
            || <a href="/doctors/patients_list/create_recept/{{ $dat->id }}">Israsyti pacientui nauja recepta</a> <br> 
            @endforeach
            <hr>
        @elseif(isset($search) && empty($data))
            <h3>Pagal jusu uzklausa '{{$search}}' rezultatu nerasta</h3>
            <hr>
        @endif  
        
        @if(count($doctor_patients) > 0)
        @foreach($doctor_patients as $all_patients) 
        {{-- {{ $all_patients->patient_name }} {{ $all_patients->patient_lastname }} {{ $all_patients->patient_birthdate }} <a href="/patientlist/{{ $all_patients->id }}">ad</a> --}}
        {{ $all_patients->patient_name }} {{ $all_patients->patient_lastname }} {{ $all_patients->patient_birthdate }} <a href="/doctors/patients_list/recepts/{{ $all_patients->id }}">Perziureti paciento receptus</a>
        || <a href="/doctors/patients_list/create_record/{{ $all_patients->id }}">Uzregistruoti pacienta vizitui</a>  
        || <a href="/doctors/patients_list/create_recept/{{ $all_patients->id }}">Israsyti pacientui nauja recepta</a> <br><br> 
        @endforeach
        @else
        <h3>Siuo metu nera jums priskirtu pacientu</h3>
        @endif  
    </div>
@endsection