@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="recept-nav" style="padding-top: 15px; padding-bottom: 20px;">
            <a href="{{ url('/patients/index') }}">Grįžti</a> 
        </div>

        <h4>Paciento vardas, pavarde:</h4>
            <p>{{ $visit->patient_name }} {{ $visit->patient_lastname }} {{ $visit->patient_birthdate }}</p>
        <h5>Vizito data:</h5> 
            <p>{{ $visit->visit_date }}</p>
        <h5>Ligos kodas:</h5> 
            <p>{{ $visit->TLK_10 }}</p>
            <h5>Vizito trukme:</h5> 
            <p>{{ Carbon\Carbon::parse($visit->visit_duration)->format('H:i') }}min.</p>
            <h5>Ar vizitas kompensuojamas:</h5> 
            <p>{{ $visit->visit_compensation }}</p>
            <h5>Ar vizitas pakartotinis:</h5> 
            <p>{{ $visit->is_visit_repeated }}</p>
            <h5>Trumpas vizito aprasymas:</h5> 
            <p>{{ $visit->visit_description }}</p>
            <br>
            Gydytojas:
            {{ $visit->doctor_name }} {{ $visit->doctor_lastname }}
    </div>
@endsection
