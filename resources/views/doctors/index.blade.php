@extends('layouts.app')
@section('content')
    <div class="container">
        Daktaro puslapis
        <br>
        <a href="{{ url('/visit/create') }}">Registruoti pacientą vizitui</a> 
        <br>
        <a href="{{ url('/recept/create') }}">Išrašyti naują receptą</a> 
        <br>
        <a href="{{ url('doctors/patients_list') }}">Peržiūrėti savo pacientų sąrašą</a> 
        {{-- <a href="{{ url('/patientlist') }}">Peržiūrėti savo pacientų sąrašą</a> --}}
        <br>
        <a href="{{ url('/') }}">Peržiūrėti darbo dienų statistiką</a> --
        <br> 
        <button type="button" class="btn btn-warning">Eksportuoti pacientų sąrašą</button> --
    </div>
@endsection