<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateLivreRequest;
use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function index()
    {
        $livres = Livre::all();
        return view("livre/index", compact("livres"));
    }



    public function create()
    {
        return view("livre/store");
    }

    public function store(Livre $livre ,  UpdateLivreRequest $request){

        $livre::create($request->all());
        return redirect()->route("index");
    }

    public function edit(Livre $livre){
        return view("livre/edit" , compact("livre"));
    }

    public function show(Livre $livre)
    {
        return view("livre/show", compact("livre"));
    }

    public function update(Livre $livre , UpdateLivreRequest $request)
    {
        $livre->update($request->all());
        return redirect()->route("index");
    }

    public function destroy(Livre $livre)
    {
        $livre->delete();
        return redirect()->route("index");
    }


}
