@extends('layout')

@section('content')
<a href="{{ route('donates.create')  }}">создать донат</a>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Game</th>
        </tr>
</thead>
<tbody>
    @foreach ($donates as $donate)
    <tr>
        <td>{{ $donate->id }}</td>
        <td>{{ $donate->name }}</td>
        <td>{{ $donate->gacha->name }}</td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection
