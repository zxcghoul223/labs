@extends('layout')

@section('content')
    @if ($age > 18)
        <p>Вам больше 18 лет</p>
    @elseif ($age == 18)
        <p>Вам ровно 18 лет</p>
    @else
        <p>Вам меньше 18 лет</p>
    @endif
@endsection