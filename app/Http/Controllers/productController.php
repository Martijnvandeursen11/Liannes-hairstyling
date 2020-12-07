<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productModel;
use Auth;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producten = productModel::all();
       // $haarstyling = productModel::where('product_categorie')
        return view('producten.index')-> with('producten', $producten);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check())
         return view('producten.create');
        return redirect('/producten')-> with('error', 'Niet bevoegd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Naam' => 'required',
            'Omschrijving' => 'required',
            'Prijs' => 'required',
            'Categorie' => 'required',
            'Foto' => 'image|nullable|max:1999'
        ]); 

        // Foto upload
        if($request->hasFile('Foto')){
            $fileNameWithExt = $request->file('Foto')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('Foto')-> getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('Foto')->storeAs('public/cover_images', $fileNameToStore);
        } else{
            $fileNameToStore = 'noimage.jpg';
        }

        // Nieuw product toevoegen
        $producten = new productModel;
        $producten->product_naam = $request->input('Naam');
        $producten->product_prijs = $request->input('Prijs');
        $producten->product_foto = $fileNameToStore;
        $producten->product_categorie = $request->input('Categorie');
        $producten->product_omschrijving = $request->input('Omschrijving');
        $producten->save();

        return redirect('/producten') ->with('Success', 'Product Toegevoegd');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producten = productModel::find($id);
        if(Auth::check())
        return view('/producten/.edit')->with('producten', $producten);
        return redirect('/producten')-> with('error', 'Niet bevoegd');


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'Naam' => 'required',
            'Omschrijving' => 'required',
            'Prijs' => 'required',
            'Categorie' => 'required',
            'Foto' => 'image|nullable|max:1999'
        ]); 

        // Foto upload
        if($request->hasFile('Foto')){
            $fileNameWithExt = $request->file('Foto')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('Foto')-> getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('Foto')->storeAs('public/cover_images', $fileNameToStore);
        }

        // Nieuw product toevoegen
        $producten = productModel::find($id);
        $producten->product_naam = $request->input('Naam');
        $producten->product_prijs = $request->input('Prijs');
        $producten->product_categorie = $request->input('Categorie');
        $producten->product_omschrijving = $request->input('Omschrijving');
         if($request->hasFile('Foto')){
             $producten->product_foto = $fileNameToStore;
         }
        $producten->save();

        return redirect('/producten') ->with('Success', 'Product aangepast');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producten = productModel::find($id);
        $producten->delete();
        return redirect('/producten') ->with('Success', 'Product verwijderd');

    }
}
