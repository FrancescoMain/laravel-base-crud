@extends('layouts.main-layout')

@section('content')
    <h1>Santissimo {{$santo -> nome}}</h1>
    <h2>Nato a {{$santo -> luogo_di_nascita}}</h2>
    <h2>E' stato benedetto il {{$santo ->data_benedizione}}</h2>
    <h2>Nella sua carriera ha compiuto {{$santo -> numero_miracoli}} miracoli</h2>
@endsection 