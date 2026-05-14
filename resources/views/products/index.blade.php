@extends('layout')

@section('content')
 <a href="{{ route('products.create')  }}">создать товар</a>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
</thead>
<tbody>
    @foreach ($products as $product)
    <tr>
        <td  >{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>
            <a href="{{ route('products.show', $product)  }}">детали</a>
            <a href="{{ route('products.edit', $product)  }}">редактирование</a>
            <form  action="{{ route('products.destroy', $product)  }}" method="POST">
                @csrf   
                @method("DELETE")
                <input type="submit" value="delete"/>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection
