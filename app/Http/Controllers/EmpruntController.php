<?php

namespace App\Http\Controllers;

use App\Models\Emprunt;
use App\Models\Livre;
use Illuminate\Http\Request;

class EmpruntController extends Controller
{

    public function add()
    {
        return view("emprunt/store");
    }

    public function store(Emprunt $emprunt , Request $request)
    {
        $data = $request->validate([
           "description" => "required",
           "reservation_date" => "required",
           "return_date" => "required",
           "livre_id" => "required",
        ]);

        $emprunt::create($data);
        return redirect()->route("index");
    }

    public function showbooks()
    {
        $livres = Livre::all();
        return view('emprunt/store', compact("livres"));
    }



}
