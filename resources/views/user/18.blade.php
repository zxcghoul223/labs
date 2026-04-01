@extends('layout')

@section('content')
    @if (count($numbers) > 0)
        <p>Сумма элементов: {{ array_sum($numbers) }}</p>
    @else
        <p>Массив пуст</p>
    @endif
@endsection