<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>modifier un Nouveau Livre</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>



<div class="container mt-5">
    <h2>modifier un Nouveau Livre</h2>
    <form method="post" action="{{route("livre.update", ["livre" => $livre])}}">
        @csrf
        @method("put")

        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" value="{{$livre->title}}" class="form-control" name="title" id="title" placeholder="Entrer le titre">
        </div>
        <div class="form-group">
            <label for="author">Auteur</label>
            <input type="text" class="form-control" value="{{$livre->author}}" name="author" id="author" placeholder="Nom de l'auteur">
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" name="genre" value="{{$livre->genre}}" class="form-control" id="genre" placeholder="Genre du livre">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input class="form-control" value="{{$livre->description}}" name="description" id="description" rows="3"></input>
        </div>
        <div class="form-group">
            <label for="publicationYear">Année de Publication</label>
            <input type="date" name="publication_year" value="{{$livre->publication_year}}" class="form-control" id="publicationYear" placeholder="Année de publication">
        </div>

        <div class="form-group">
            <label for="totalCopies">Nombre Total de Copies</label>
            <input type="number" name="total_copies" value="{{$livre->total_copies}}" class="form-control" id="totalCopies" placeholder="Nombre total de copies">
        </div>

        <div class="form-group">
            <label for="availableCopies">Copies Disponibles</label>
            <input type="number" name="available_copies" value="{{$livre->available_copies}}" class="form-control" id="availableCopies" placeholder="Copies disponibles">
        </div>

        <button type="submit" class="btn btn-primary">edit</button>
    </form>
</div>

</body>
</html>
