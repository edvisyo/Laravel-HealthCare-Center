@extends('layouts.app')
@section('content')
<div class="container">
    <div class="recept-nav" style="padding-top: 15px; padding-bottom: 20px;">
    <a href="{{ url('/patients/index') }}">Grįžti</a> 
    </div>

    <h3>Receptu puslapis</h3>

        @if(count($recepts) > 0)
        @foreach($recepts as $recept) 
        <div class="card" style="margin-bottom: 45px;">
            <div class="card-header">
            <h3>Paciento vardas, pavarde: {{ $recept->patient_name }} {{ $recept->patient_lastname }}</h3> {{-- dabar:{{ $dateTime->format('Y-m-d H:i:s') }} --}}
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <h5>Sudedamoji dalis:</h5> 
                <h3><a href="/recepts/{{ $recept->id }}">{{ $recept->substance }}</a></h3>
                <h5>Receptas galioja iki:</h5> 
                {{ $recept->validity ?? $recept->termless }} 
                @if($recept->validity < \Carbon\Carbon::now() && empty($recept->termless)) 
                    <div class="alert alert-danger">
                        Šis receptas nebegalioja
                    </div>
                @endif   
                <div class="row justify-content-end" style="padding-right: 15px;">
                    <footer class="blockquote-footer">Gydytojas: {{ $recept->doctor_name }} {{ $recept->doctor_lastname }} <br> Išrašymo data: {{ Carbon\Carbon::parse($recept->created_at)->format('Y-m-d') }}</footer>
                </div>
               </blockquote>
            </div>
        </div>
        @endforeach  
        {{ $recepts->links() }} 
        @else
        <div class="alert alert-dark" role="alert">
            Šiuo metu jums išrašytų receptų  nėra
        </div>
    @endif 
</div>
@endsection