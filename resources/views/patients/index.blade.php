@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="recept-nav" style="padding-top: 15px; padding-bottom: 20px;">
        <a href="">Perziureti receptu sarasa</a> --
        </div>
            @if(count($visits) > 0)
            @foreach($visits as $visit)
            <div class="card">
                <div class="card-header">
                    <h3>Paciento vardas, pavarde: {{ $visit->patient_name }} {{ $visit->patient_lastname }}</h3>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <h5>Vizito data:</h5> 
                    <h3><a href="/patients/{{ $visit->id }}">{{ $visit->visit_date }}</a></h3>

                    <h5>Ligos kodas:</h5> 
                    <p>{{ $visit->TLK_10 }}</p>
                    @if(count($doc) > 0)
                    <div class="row justify-content-end">
                        @foreach($doc as $doctor)
                        <footer class="blockquote-footer">Gydytojas: {{ $doctor->name }} {{ $doctor->lastname }} <br> Registravimo data: {{ $visit->created_at }}</footer>
                        @endforeach
                    </div>
                @endif
                   </blockquote>
                </div>
            </div>
            @endforeach
            @else
            <div class="alert alert-dark" role="alert">
                {{ $title }}
            </div>
        @endif 
    </div>
@endsection 