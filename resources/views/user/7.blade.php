@extends('layout')

@section('content')
    <p>Имя: {{ $employee['name'] }}</p>
    <p>Возраст: {{ $employee['age'] }}</p>
    <p>Зарплата: {{ $employee['salary'] }}</p>
@endsection