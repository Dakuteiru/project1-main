@extends('layout')

@section('content')
<h2>{{ $product->id }}</h2>
<form action="{{ route('products.update', $product)  }}" method="POST">
    @csrf
    @method("PUT")
    
    <label>
        Название:
        <input value="{{ $product->name }}" name="name"/>
    </label>

    <label>
        Описание:
        <textarea name="description">{{ $product->description }}</textarea>
    </label>

    <input type="submit" value="подтвердить"/>
</form>
@endsection
