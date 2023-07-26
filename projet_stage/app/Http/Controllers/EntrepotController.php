<?php

namespace App\Http\Controllers;

use App\Models\Entrepot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EntrepotController extends Controller
{
    public function index()
    {
        $entrepots = Entrepot::all();
        return view('Entrepot.index', compact('entrepots'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required|max:60',
            'adresse' => 'required|max:200',
            'capacite_max' => 'required|numeric',
            'type' => 'required|max:20',
        ]);
        Entrepot::create($request->all());
        return redirect()->route('entrepots.index');
    }
 
    //     // Create a new product record in the database
    //     $product = Product::create([
    //         'name' => $validatedData['name'],
    //         'price' => $validatedData['price'],
    //         // Add more fields as needed
    //     ]);
    public function create()
    {
        $entrepots = Entrepot::all();
        return view('Entrepot.create', compact('entrepots'));
    }
}