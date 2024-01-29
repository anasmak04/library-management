<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function index()
    {
        $livres = Livre::all();
        return view("livre/index", compact("livres"));
    }


    public function addview()
    {
        return view("livre/store");
    }

    public function store(Livre $livre ,  Request $request){
        $data =  $request->validate([
          "title" => "required",
          "author" => "required",
          "genre" => "required",
          "description" => "required",
          "publication_year" => "required",
          "total_copies" => "required",
          "available_copies" => "required",
        ]);

        $livre::create($data);
        return redirect()->route("index");
    }

    public function editview(Livre $livre){
        return view("livre/edit" , compact("livre"));
    }

    public function update(Livre $livre , Request $request)
    {
        $data =  $request->validate([
            "title" => "required",
            "author" => "required",
            "genre" => "required",
            "description" => "required",
            "publication_year" => "required",
            "total_copies" => "required",
            "available_copies" => "required",
        ]);

        $livre->update($data);

        return redirect()->route("index");
    }

    public function destroy(Livre $livre)
    {
        $livre->delete();
        return redirect()->route("index");
    }


}
