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

    <form action="/login" method="POST">
        @csrf
        <label for="email">
        Email
        </label>
        <input type="email" name = "email"/>

    
         <label for="password">
        Password
        </label>
        <input type="password" name = "password"/>

        <input type ="submit"/>


    </form>
    
@endsection