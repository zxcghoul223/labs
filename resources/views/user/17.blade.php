@extends('layout')

@section('content')
    @unless ($age >= 18)
        <p>Внимание! Вы несовершеннолетний пользователь!</p>
    @endunless
@endsection