@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Paciento {{ $name }} {{ $lastname }} {{ $birthdate }} receptai:</h3> 

        @if(!empty($recepts))
            @foreach($recepts as $recept)
                {{ $recept->patient_name }} {{ $recept->substance }}
            @endforeach
            @elseif(empty($recepts))
            <h4>as</h4>
            {{ $title }}
        @endif
    </div>
@endsection