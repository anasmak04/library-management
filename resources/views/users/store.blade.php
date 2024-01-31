<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter un Nouveau Livre</title>
</head>
<body>

@extends('layouts.app')
@section("content")

    <div class="container mt-5">
        <h2>Ajouter un Nouveau Livre</h2>
        <form method="post" action="">
            @csrf

            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="veillez entrer votre nom">
            </div>
            <div class="form-group">
                <label for="author">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="veillez entrer votre email">
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <input type="text" name="genre" class="form-control" id="genre" placeholder="Genre du livre">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="publicationYear">Année de Publication</label>
                <input type="date" name="publication_year" class="form-control" id="publicationYear" placeholder="Année de publication">
            </div>
            <div class="form-group">
                <label for="totalCopies">Nombre Total de Copies</label>
                <input type="number" name="total_copies" class="form-control" id="totalCopies" placeholder="Nombre total de copies">
            </div>
            <div class="form-group">
                <label for="availableCopies">Copies Disponibles</label>
                <input type="number" name="available_copies" class="form-control" id="availableCopies" placeholder="Copies disponibles">
            </div>


            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection

</body>
</html>
