@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="py-5">
                <div class="card">
                    <div class="card-header">Administratoriaus puslapis</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Labas Admine {{ Auth::user()->email }}!
                    </div>
                </div>
            </div>
                <a href="{{ url('/admin/create')}}">Naujo administratoriaus registravimas</a>
            {{-- <a href="{{ route('create') }}">{{ __('Naujo administratoriaus registravimas') }}</a> --}}
            <br>
            <a href="{{ url('/doctor/create')}}">Naujo gydytojo registravimas</a>
            <br>
            <a href="{{ url('/pharmacist/create')}}">Naujo vaistininko registravimas</a>
            <br>
            <a href="{{ url('/patient/create')}}">Naujo paciento registravimas</a>
        </div>
    </div>
</div>
@endsection
