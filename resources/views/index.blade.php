@extends('layout')

@section('content')

<h1>hellow, wordl</h1>
<p>{{ now() }}<p>

@auth
    <a href="">{{ auth()->user()->email }}</a>
    <form action="/logout" method="POST">
        @csrf
        <input type="submit" value="Logout"/>
    </form>
    @else
    <a href="/login">Login</a>
@endauth
@endsection