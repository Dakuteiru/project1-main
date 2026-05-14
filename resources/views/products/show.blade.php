@extends('layout')

@section('content')
<h2>Product {{ $product->id }}</h2>
<p><strong>Name:</strong> {{ $product->name }}</p>
@endsection
