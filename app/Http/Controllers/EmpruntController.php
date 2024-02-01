<?php

namespace App\Http\Controllers;

use App\Models\Emprunt;
use App\Models\Livre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmpruntController extends Controller
{


    public function mesReservation()
    {
        $res = Auth::user()->reservation;
        return view("emprunt/index", compact( "res"));

    }

    public function add()
    {
        return view("emprunt/store");
    }

    public function store(Request $request, Livre $livre)
    {
        $data = $request->validate([
            "description" => "required",
            "livre_id" => "required"
        ]);


        $data["reservation_date"] = now();
        $data["return_date"] = now()->addDays(15);

        $userId = auth()->id();

        $data['user_id'] = $userId;


        $livre = Livre::find($data['livre_id']);

        if ($livre && $livre->available_copies > 0) {
            $livre->decrement("available_copies");
            Emprunt::create($data);
        }

        return redirect()->route("index");

    }

    public function destroy(Emprunt $emprunt)
    {
        $emprunt->delete();
        return redirect()->route("emprunt.index")->with('success', 'Reservation deleted successfully');
    }






    public function showbooks()
    {
        $livres = Livre::all();
        return view('emprunt/store', compact("livres"));
    }



}
