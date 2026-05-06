@extends('layout')

@section('content')
    <input type="text" value="{{ $value1 }}" placeholder="Первый инпут"><br><br>
    <input type="text" value="{{ $value2 }}" placeholder="Второй инпут"><br><br>
    <input type="text" value="{{ $value3 }}" placeholder="Третий инпут">
@endsection