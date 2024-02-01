<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gestion des livres</title>
</head>
<body>

@extends('layouts.app')
@section('content')
    @if(session('success'))
        <script>
            Swal.fire({
                title: 'Succès!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Supprimé!',
                text: '{{ session('error') }}',
                confirmButtonText: 'OK'
            });
        </script>
    @endif


    <div class="container mt-5">
        <h2>Liste des Livres</h2>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Genre</th>
                <th scope="col">Description</th>
                <th scope="col">Publication Year</th>
                <th scope="col">Total Copies</th>
                <th scope="col">Available Copies</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>

            @foreach($res as $reser)
                <tr>
                    <td>{{$reser->id}}</td>
                    <td>{{$reser->description}}</td>
                    <td>{{$reser->reservation_date}}</td>
                    <td>{{$reser->return_date}}</td>
                    <td>{{$reser->livre_id}}</td>
                    <td>{{$reser->user_id}}</td>
                    <td>{{$reser->created_at}}</td>
                    <td>{{$reser->updated_at}}</td>

                    <td class="d-flex gap-3">
                        <form action="{{ route('emprunt.destroy', ['emprunt' => $reser->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>
</html>
