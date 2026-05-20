@extends('layout')

@section('content')
<form action="{{ route('donates.store') }}" method="POST">
    @csrf
    
    <label>
        Название:
        <input name="name"/>
    </label>

    <label>
        Описание:
        <textarea name="description"></textarea>
    </label>
    <select name="gacha_id">
        @foreach ($products as $product)
            <option value="{{ $product->id }}">{{ $product->name}}</option>
            
        @endforeach
    </select>

    <input type="submit" value="подтвердить"/>
</form>
@endsection