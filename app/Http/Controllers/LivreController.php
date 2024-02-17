<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateLivreRequest;
use App\Models\Livre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class LivreController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('book_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');


        $searchTerm = $request->input('search');
        if ($searchTerm) {
            $livres = Livre::where('title', 'LIKE', "%{$searchTerm}%")
            ->orWhere('author', 'LIKE', "%{$searchTerm}%")
                ->orWhere("description", "LIKE", "%{$searchTerm}%")
            ->paginate(4);
        } else {
            $livres = Livre::paginate(4);

        }

        return view("livre/index", compact("livres", "searchTerm"));
    }



    public function create()
    {
        return view("livre/store");
    }

    public function store(Livre $livre ,  UpdateLivreRequest $request){

        $livre::create($request->all());
        return redirect()->route("livres.index")->with('success', 'Nouveau livre ajouté avec succès!');
    }

    public function edit(Livre $livre){
        return view("livre/edit" , compact("livre"));
    }

    public function show(Livre $livre)
    {
        return view("livre/edit", compact("livre"));
    }

    public function update(Livre $livre , UpdateLivreRequest $request)
    {
        $livre->update($request->all());
        return redirect()->route("livres.index");
    }


    public function destroy(Livre $livre)
    {
        $livre->delete();
        return redirect()->route("livres.index")->with('success', 'livre a ete suppreme avec succès!');
    }



}
