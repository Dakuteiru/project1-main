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

    <form action="/register" method="POST">
        @csrf
        <label for="email">
        Email
        </label>
        <input type="email" name = "email"/>

         <label for="name">
        Name
        </label>
        <input type="name" name = "name"/>

         <label for="password">
        Password
        </label>
        <input type="password" name = "password"/>

         <label for="password_confirmation">
        Password-Recomfirm
        </label>
        <input type="password_confirmation" name = "password_confirmation"/>

        <input type ="submit"/>


    </form>
    
@endsection