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



    <div class="container mt-5">

        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <h2>Liste des Livres</h2>
        <a class="btn btn-success mb-4" href="{{route("livre.add")}}">add new book</a>
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
            @foreach($livres as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->genre}}</td>
                <td>{{$book->description}}</td>
                <td>{{$book->publication_year}}</td>
                <td>{{$book->total_copies}}</td>
                <td>{{$book->available_copies}}</td>

                <td class="d-flex gap-3">
                    <a class="btn btn-warning ml-1" href="{{ route('livre.edit', ['livre' => $book]) }}">Edit</a>
                    <form class="ml-2" action="{{ route('livre.delete', ['livre' => $book]) }}" method="post" style="display: inline-block;">
                        @csrf
                        @method("delete")
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a class="btn btn-primary ml-1" href="http://127.0.0.1:8000/emprunt">reserver</a>
                </td>

            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </body>
    </html>
