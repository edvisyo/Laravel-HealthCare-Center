@extends('layouts.app')
@section('content')
    <div class="container">
      <div class="recept-nav" style="padding-top: 15px; padding-bottom: 20px;">
        <a href="{{ url('/recepts') }}">Grįžti</a> 
        </div>
                           
        <h3>{{ $recepts->substance }}</h3>


        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Paciento vardas, pavarde: {{ $recepts->patient_name }} {{ $recepts->patient_lastname }}</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
               <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>

    </div>
@endsection    