@extends('layouts.main-layout')

@section('content')

    <h1>Santi</h1> 
    <ul>

        @foreach ($santi as $santo)
            <li>
                <h3>Nome: {{$santo -> nome }}</h3>
                <h3>Luogo Di Nascina: {{$santo -> luogo_di_nascita}}</h3>
                <h3>Data di Benedizione: {{$santo -> data_benedizione}}</h3>
                <h3>Numero di Miracoli: {{$santo -> numero_miracoli}}</h3>
            </li>
        @endforeach

    </ul>

@endsection