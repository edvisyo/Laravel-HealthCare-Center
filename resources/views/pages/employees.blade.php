@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Darbuotoju puslapis</h3>
    <hr>
    <h4>Musu gydytojai</h4>
    @if(count($doctors) > 0) 
        @foreach($doctors as $doctor) 
            <h6>{{$doctor->name}} {{$doctor->lastname}} - {{$doctor->specialization}}{{$doctor->other_specialization}}</h6>
        @endforeach
        @else
            <h5>Siuo metu gydytoju nera</h5>
    @endif
    <h4>Musu vaistininkai</h4>
    @if(count($pharmacists) > 0) 
        @foreach($pharmacists as $pharmacist) 
            <h6>{{$pharmacist->name}} {{$pharmacist->lastname}} - {{$pharmacist->work}}</h6>
        @endforeach
        @else
            <h5>Siuo metu vaistininku nera</h5>
    @endif
</div>
@endsection