@extends('layouts.main-layout')

@section('content')
    
    <h1>CREA NUOVO SANTO</h1>
    <form method="POST" action="{{ route('santo.store') }}">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome">
        <br>
        <label for="luogo_di_nascita">Luogo di nascita</label>
        <input type="text" name="luogo_di_nascita">
        <br>
        <label for="data_benedizione">Data di benedizione</label>
        <input type="date" name="data_benedizione">
        <br>
        <label for="numero_miracoli">Numero di  miracoli</label>
        <input type="number" name="numero_miracoli">
        <br>
        <input type="submit" value="CREA">
    </form>

@endsection