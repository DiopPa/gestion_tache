<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tache;

class TacheController extends Controller
{
    public function liste(){
        $produits=Tache::all();
        return view('produit.liste',compact('produits'));
    }

    public function ajouter_produit(){
        return view('produit.ajouter');
    }

    public function store(Request $request){
        $request->validate([
            'designation'=>'required',
            'quantite'=>'required',
            'prix'=>'required',

        ]);
        $produit=new Tache();
        $produit->designation=$request->designation;
        $produit->quantite=$request->quantite;
        $produit->prix=$request->prix;
        $produit->save();

        return redirect('/ajouter')->with('status','produit ajouter avec succés');


    }

    public function update_produit($id){
        $produits=Tache::find($id);
        return view("produit.update",compact('produits'));
    }

    public function update_produit_traitement(Request $request){
        $request->validate([
            'designation'=>'required',
            'quantite'=>'required',
            'prix'=>'required',
        ]
            

        );
        $produit=Tache::find($request->id);
        $produit->designation=$request->designation;
        $produit->quantite=$request->quantite;
        $produit->prix=$request->prix;
        $produit->update();

        return redirect('/produit')->with('status','produit modifier  avec succés');

    }

    public function delete_produit($id){
     $produit=Tache::find($id);
     $produit->delete();

     return redirect('/produit')->with('status','produit supprimé avec succés');
    }

    public function voir_produit($id){
        $tache=Tache::find($id);
        return view("produit.tache",compact('tache'));
    }
}
