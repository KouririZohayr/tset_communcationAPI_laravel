<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Facture;
use Illuminate\Http\Request;
use App\Models\Article;
class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $factures = Facture::all();
        return response()->json($factures);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
      
      /*   $newfacture = new Facture([
            'numero_fact' =>$request->Number_F,
            'date_fact' =>$request->Date_F,
            'id_fournisseur' =>$request->Fournisseur_F,
            ]);
            $newfacture->save();
            $id=$newfacture->id;  */
            
            response()->json($request,201);
/*
            foreach($request->row_F as $ligne){
                $data=$ligne["data"];
                $idArticl=false;
               
                if($data["isNew"]){
                    response()->json($data,201);
                   /*  $article = new Article(["designation"=>$data["value"], "id_SC"=>$request["Type_F"],  "designation"=>$data["value"] ]);
                    $article->save();
                    $idArticl=$article->id;  
                }else {
                    $idArticl=Article::get('id')->where('designation',$data->label);
                }

                   
                
            }
            return response()->json($idArticl,201);

            */
            

            
    }
    
    /**
     *   'classeur' =>$request->classeur,
     * Display the specified resource.
     */
    public function show(Facture $facture)
    {
        $factures = Facture::find($facture);
        return response()->json($factures);
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Facture $facture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Facture $facture)
    {
        //
    }
}
