@extends('layout')

@section('content')

@endsection
<from action="{{route('product.store') }}">
    @csrf
    @method('PUT')
</from>

<label>
    Название:
    <input name="name" />
</label>

<label>
    Описание:
    <input name="description" />
</label>

<input type="submit" value="подтвердить"/>
@push('scripts')

@endpush
