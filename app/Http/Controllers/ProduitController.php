<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
     /**k
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request('search')!= null)
        {
           $produits =  Produit::where('nom','like', '%'.request('search').'%')->get();
            return response()->json($produits);

        }
        else
        {
            return $this->refresh();
        }
    }
    
    public function store(Request $request)
    {
       $produits =  Produit::create($request->all());

       if($produits){
            
        return $this->refresh();
        
       }
    }

    public function edit($id)
    {
        $produit = Produit::where('produit_id',$id)->first();

        return response()->json($produit);
    }

    public function update($id)
    {
        
        Produit::where('produit_id',$id)->update(   ['nom'=> request('nom'),
                                                    'description'=> request('description'),
                                                    'prix_achat'=> request('prix_achat'),
                                                    'prix_de_vente'=> request('prix_de_vente'),
                                                    'quantitee'=> request('quantitee') ]);
        
        // $produit = Produit::where('produit_id','=',$id)->firstOrFail();
        // $produit->nom = request('nom');
        // $produit->description = request('description');
        // $produit->prix_achat = request('prix_achat');
        // $produit->prix_de_vente = request('prix_de_vente');
        // $produit->quantitee = request('quantitee');
        // $produit->save();
        

        // if($produit){

            return $this->refresh();
        // }
    }

    public function destroy($id)
    {
            
            if(Produit::where('produit_id',$id)->delete())
            {
               
                return $this->refresh();
            }
            else
            {
                return response()->json(['error'=>'Destroy methode failed'],425);
            }
        
    }

    private function refresh()
    {
        $produits = Produit::orderBy('produit_id','asc')->get();
            
        return response()->json($produits);
    }
}