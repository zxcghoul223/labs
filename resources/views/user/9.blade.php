@extends('layout')

@section('content')
    <p>Город: {{ $city ?? 'Москва' }}</p>
@endsection