@extends('layout')

@section('content')
@if ($errors->any())
<div style="background-color: red; color:blanchedalmond;">
    <ul>
        @foreach ( $errors ->all() as $error )
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
    

@can('create', App\Models\Gacha::class)
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
@endcan
@endsection
