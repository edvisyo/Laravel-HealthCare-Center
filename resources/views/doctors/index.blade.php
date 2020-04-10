@extends('layouts.app')
@section('content')
    <div class="container">
        Daktaro puslapis
        <br>
        <a href="{{ url('/') }}">Sukurti nauja ligos irasa</a> --
        <br>
        <a href="{{ url('/') }}">Israsyti nauja recepta</a> --
        <br>
        <a href="{{ url('/') }}">Perziureti savo pacientu sarasa</a> --
        <br>
        <a href="{{ url('/') }}">Perziureti darbo dienu statistika</a> --
        <br> 
        <button type="button" class="btn btn-warning">Eksportuoti pacientu sarasa</button> --
    </div>
@endsection