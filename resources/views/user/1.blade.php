@extends('layout')

@section('content')
    <p><strong>Имя:</strong> {{ $name }}</p>
    <p><strong>Возраст:</strong> {{ $age }}</p>
    <p><strong>Зарплата:</strong> {{ $salary }} руб.</p>
@endsection