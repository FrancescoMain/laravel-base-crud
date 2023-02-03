@extends('layouts.main-layout')

@section('content')

    <h1>Santi</h1> 

     <a href="{{ route('santo.create') }}">CREA NUOVO SANTO</a>

    <ul>

        @foreach ($santi as $santo)
            <li>
                <a href="{{ route('santo.show', ['id' => $santo -> id]) }}">
                    <h3>{{$santo -> id}}</h3>
                    <h3>Nome: {{$santo -> nome }}</h3>
                    <h3>Luogo Di Nascina: {{$santo -> luogo_di_nascita}}</h3>
                    <h3>Data di Benedizione: {{$santo -> data_benedizione}}</h3>
                    <h3>Numero di Miracoli: {{$santo -> numero_miracoli}}</h3>
                </a>
                 <a href="{{ route('santo.destroy', ['id' => $santo -> id]) }}">X</a>
            </li>
        @endforeach

    </ul>

@endsection