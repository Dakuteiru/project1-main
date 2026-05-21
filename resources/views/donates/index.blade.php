@extends('layout')

@section('content')
<a href="{{ route('donates.create')  }}">создать донат</a>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Game</th>
            <th>Action</th>
        </tr>
</thead>
<tbody>
    @foreach ($donates as $donate)
    <tr>
        <td>{{ $donate->id }}</td>
        <td>{{ $donate->name }}</td>
        <td>{{ $donate->cost }}</td>
        <td>{{ $donate->gacha->name }}</td>
        <td>
            <a href="{{ route('donates.edit', $donate)  }}">редактировать</a>
            <a href="{{ route('donates.show', $donate ) }}">показать</a>
             <form  action="{{ route('products.destroy', $donate)  }}" method="POST">
                @csrf   
                @method("DELETE")
                <input type="submit" value="delete"/>
            </form>
            
            <td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection
