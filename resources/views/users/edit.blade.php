<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>modifier un utilisateur</title>
</head>
<body>
@extends('layouts.app')
@section("content")
    <div class="container mt-5">
        <h2>modifier un utilisateur</h2>


        <form method="post" action="{{ route('utilisateurs.update',  $utilisateur) }}">
            @csrf
            @method("put")

            <div class="form-group">
                <label for="title">name</label>
                <input type="text" value="{{$utilisateur->name}}" class="form-control" name="name" id="name" placeholder="Entrer le name">
            </div>
            <div class="form-group">
                <label for="author">email</label>
                <input type="text" class="form-control" value="{{$utilisateur->email}}" name="author" id="author" placeholder="Nom de email">
            </div>

            <button type="submit" class="btn btn-primary m-4">edit</button>
        </form>
    </div>
@endsection
</body>
</html>
