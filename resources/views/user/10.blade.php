@extends('layout')

@section('content')
    <p>Страна: {{ $location['country'] ?? 'Россия' }}</p>
    <p>Город: {{ $location['city'] ?? 'Москва' }}</p>
@endsection