<?php

namespace App\Http\Controllers;

use App\Models\Mattress;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MattressController extends Controller
{
    public function index()
    {
        return view('mattresses/mattressindex', [
            'mattresses' => Mattress::all(),
        ]);
    }

    //récupère le slug en même temps que l'id
    public function show($id, $slug)
    {
        $mattress = Mattress::where('id', $id)->where('slug', $slug)->first();

        return view('mattresses/show', ['mattress' => $mattress]);
    }

    //Création du nouveau matelas avec create et store
    public function create()
    {
        return view('mattresses/create', [
            'sizes' => Size::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|url',
            'brand' => 'required',
            'description' => 'required|between:10,200',
            'price' => 'required|integer|between:1,15000',
            'discount' => '',
            'stock' => 'required|integer|between:1,10000',
            'sizes' => 'required|array',
            'sizes.*' => 'required|exists:sizes,id',
        ]);

        $mattress = new Mattress();
        $mattress->image = $request->image;
        $mattress->brand = $request->brand;
        $mattress->slug = Str::slug($mattress->brand); //récupère le brand du matelas créer afin d'en faire le slug
        $mattress->description = $request->description;
        $mattress->price = $request->price;
        $mattress->discount = $request->discount;
        $mattress->stock = $request->stock;
        $mattress->save();
        $mattress->sizes()->sync($request->sizes);

        return redirect('/matelas')->with('message', 'Le matelas est bien ajouté à la base de données');
    }


    //Ici modification des matelas (similaires à création)

    public function edit($id)
    {
        $mattress = Mattress::findOrFail($id);

        return view('mattresses/edit', [
            'mattress' => $mattress,
            'sizes' => Size::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $mattress = Mattress::findOrFail($id);

        $request->validate([
            'image' => 'required|url',
            'brand' => 'required',
            'description' => 'required|between:10,200',
            'price' => 'required|integer|between:1,15000',
            'discount' => '',
            'stock' => 'required|integer|between:1,10000',
            'sizes' => 'required|array',
            'sizes.*' => 'required|exists:sizes,id',
        ]);

        $mattress->image = $request->image;
        $mattress->brand = $request->brand;
        $mattress->slug = Str::slug($mattress->brand); 
        $mattress->description = $request->description;
        $mattress->price = $request->price;
        $mattress->discount = $request->discount;
        $mattress->stock = $request->stock;
        $mattress->save();
        $mattress->sizes()->sync($request->sizes);

        return redirect('/matelas');
    }


    //Suppression des matelas sélectionnés
    public function destroy($id)
    {
        Mattress::destroy($id);

        return redirect('/matelas')->with('message', 'Le jeu a été supprimé.');
    }

}
