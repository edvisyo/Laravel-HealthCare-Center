@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Paciento '{{ $name }} {{$lastname }}' receptu sarasas:</h2>
        <br>
        <br>
        @if(count($recepts) > 0)
            @foreach($recepts as $recept)
                <h5>Sudedamoji dalis: {{ $recept->substance }}</h5>
                <h5>Receptas panaudotas: 0</h5>
                <h5>Israsymo data: {{ Carbon\Carbon::parse($recept->created_at)->format('Y-m-d H:i') }}</h5>
                <h5>Galioja iki: {{ $recept->validity ?? $recept->termless }}
                    @if($recept->validity < \Carbon\Carbon::now() && empty($recept->termless)) 
                    <div class="alert alert-danger">
                        Receptas nebegalioja
                    </div>
                    @endif 
                </h5>
                <small>Gydytojas: {{ $recept->doctor_name }} {{ $recept->doctor_lastname }}</small>
                <div class="row justify-content-end">
                    <a href="/doctors/patients_list/recepts/recept_details/{{ $recept->id }}">Perziureti recepta detaliau</a>
                </div>
                <hr>
                <hr>
            @endforeach
            {{ $recepts->links() }}
        @else
        <div class="alert alert-dark">
            Pacientas israsytu receptu siuo metu neturi
        </div>
        @endif
    </div>
@endsection
