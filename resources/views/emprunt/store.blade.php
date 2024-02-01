<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
@extends('layouts.app')
@section("content")
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 mt-4">
                    <div class="card">
                        <div class="card-header">Emprunt Form</div>
                        <div class="card-body">
                            <form method="POST" action="{{route("emprunt.store")}}">
                                @csrf

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="text" class="form-control" id="description" name="description" required>
                                </div>



                                <div class="form-group">
                                    <label for="return_date">Return Date</label>
                                    <input type="date" class="form-control" id="return_date" name="return_date" required>
                                </div>

                                <div class="form-group">
                                    <label for="livre_id">Livre</label>
                                    <select class="form-control" id="livre_id" name="livre_id">
                                        @foreach($livres as $livre)
                                        <option value="{{ $livre->id }}">{{ $livre->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>
</html>
