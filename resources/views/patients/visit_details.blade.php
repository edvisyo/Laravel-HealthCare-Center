@extends('layouts.app')
@section('content')
    <div class="container">

        <a href="{{ url('/patients/index')}}">Gryzti</a>

        <h4>Paciento vardas, pavarde:</h4>
            <p>{{ $visit->patient_name }} {{ $visit->patient_lastname }} {{ $visit->patient_birthdate }}</p>
        <h5>Vizito data:</h5> 
            <p>{{ $visit->visit_date }}</p>
        <h5>Ligos kodas:</h5> 
            <p>{{ $visit->TLK_10 }}</p>
            <h5>Vizito trukme:</h5> 
            <p>{{ $visit->visit_duration }} min.</p>
            <h5>Ar vizitas kompensuojamas:</h5> 
            <p>{{ $visit->visit_compensation }}</p>
            <h5>Ar vizitas pakartotinis:</h5> 
            <p>{{ $visit->is_visit_repeated }}</p>
            <h5>Trumpas vizito aprasymas:</h5> 
            <p>{{ $visit->visit_description }}</p>
            <br>
            Gydytojas:
            {{ $visit->doctor_id }}
    </div>
@endsection
