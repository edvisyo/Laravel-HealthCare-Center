@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="recept-nav" style="padding-top: 15px; padding-bottom: 20px;">
        Jums israsytus receptus galite rasti: <a href="{{ url('/recepts') }}">Peržiūrėti receptų sąrašą</a> 
        </div>
        

        <h3>Jusu paskirtu vizitu sarasas</h3>

            @if(count($visits) > 0)
            @foreach($visits as $visit)
            <div class="card" style="margin-bottom: 45px;">
                <div class="card-header">
                    <h3>Paciento vardas, pavarde: {{ $visit->patient_name }} {{ $visit->patient_lastname }}</h3>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <h5>Vizito data:</h5> 
                    <h3><a href="/patients/{{ $visit->id }}">{{ $visit->visit_date }}</a></h3>

                    <h5>Ligos kodas:</h5> 
                    <p>{{ $visit->TLK_10 }}</p>
                    <div class="row justify-content-end" style="margin-right: 3px;">
                        <footer class="blockquote-footer">Gydytojas: {{ $visit->doctor_name }} {{ $visit->doctor_lastname }} <br> Registravimo data: {{ Carbon\Carbon::parse($visit->created_at)->format('Y-m-d H:i') }}</footer>
                    </div>
                   </blockquote>
                </div>
            </div>
            @endforeach
            {{ $visits->links() }}
            @else
            <div class="alert alert-dark" role="alert">
                Šiuo metu jums priskirtų  vizitų  nėra 
            </div>
        @endif 
    </div>
@endsection 