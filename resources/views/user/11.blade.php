@extends('layout')

@section('content')
    <p>Год: {{ $year ?? date('Y') }}</p>
    <p>Месяц: {{ $month ?? date('m') }}</p>
    <p>День: {{ $day ?? date('d') }}</p>
@endsection