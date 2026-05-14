@extends('layout')

@section('content')

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    
    <label>
        Название:
        <input name="name"/>
    </label>

    <label>
        Описание:
        <textarea name="description"></textarea>
    </label>

    <input type="submit" value="подтвердить"/>
</form>
@endsection
