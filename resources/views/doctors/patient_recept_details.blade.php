@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Detalus recepto aprasymas</h3>

        @if(count($recept_detail) > 0)
        @foreach($recept_detail as $detail)
            {{ $detail->substance }}
        @endforeach
        @endif
    </div>
@endsection    