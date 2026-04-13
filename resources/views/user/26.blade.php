@extends('layout')

@section('content')
    <table border="1">
        @foreach ($matrix as $row)
        <tr>
            @foreach ($row as $cell)
                <td>{{ $cell }}</td>
            @endforeach
        </tr>
        @endforeach
    </table>
@endsection