<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateLivreRequest;
use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function index(Request $request)
    {
        $searchTerm = $request->input('search');

        if ($searchTerm) {
            $livres = Livre::where('title', 'LIKE', "%{$searchTerm}%")
            ->orWhere('author', 'LIKE', "%{$searchTerm}%")
                ->orWhere("", "LIKE", "%{$searchTerm}%")
            ->paginate(5);
        } else {
            $livres = Livre::paginate(5);
        }

        return view("livre/index", compact("livres", "searchTerm"));
    }



    public function create()
    {
        return view("livre/store");
    }

    public function store(Livre $livre ,  UpdateLivreRequest $request){

        $livre::create($request->all());
        session()->flash('success', 'Nouveau livre ajouté avec succès!');
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
        session()->flash('success', 'livre a ete suppreme avec succès!');
        return redirect()->route("index");
    }



}
