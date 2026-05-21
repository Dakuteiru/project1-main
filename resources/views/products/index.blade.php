@extends('layout')

@section('content')

@if (session('warning'))
<div style="background-color: yellow; color:black;">
    {{ session('warning') }}
</div>
@endif

@if (session('success'))
<div style="background-color: green; color:blue;">
    {{ session('success') }}
</div>
@endif
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
