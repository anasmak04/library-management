<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>gestion des livres</title>
</head>
<body>

@extends('layouts.app')
@section('content')

    <div class="container mt-5">
        <h2>Liste des utilisateurs</h2>

        <form action="{{ route('utilisateurs.index') }}" method="GET">
            <div class="form-group row d-flex justify-content-center align-items-center">
                <div class="col-8">
                    <input type="text" name="search" class="form-control" placeholder="Search for a user..." value="{{ request()->search }}">
                </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-primary mb-3 mt-3">Search</button>
                </div>
            </div>
        </form>

            <a class="btn btn-success mb-4" href="">ajouter nouveau utilisateur</a>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>

                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td class="d-flex gap-3">

                            <a class="btn btn-warning ml-1" href="{{route("utilisateurs.edit", $user)}}">Edit</a>

                        <form class="ml-2" action="{{ route('utilisateurs.destroy', $user) }}" method="post" style="display: inline-block;">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    {{$users->links()}}

    </div>
@endsection

</body>
</html>
