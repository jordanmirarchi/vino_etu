<?php

namespace App\Http\Controllers;

use App\Http\Resources\BouteilleResource;
use App\Models\Bouteille;
use App\Models\Cellier;
use App\Models\CellierBouteille;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CellierBouteilleAcheteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //

    }

    /**
     *
     * Récupérer les bouteilles contenu dans un cellier donné.
     *
     * @param int|string $cellierId l'id du cellier d'on on veut afficher l'inventaire
     */
    public function obtenirBouteillesParCellier($cellierId) {
        return
            DB::table('celliers_bouteilles as cb')
                ->join("bouteilles as b", "bouteilles_id", "=", "b.id")
                ->join("pays", "b.pays_id", "=", "pays.id")
                ->join("categories as cat", "b.categories_id", "=", "cat.id")
                ->select(
                    "cb.id as inventaireId",
                    "cb.inventaire as inventaire",
                    "b.url_image as imageBouteille",
                    "b.nom as nom",
                    "b.url_image as image",
                    "b.format as format",
                    "pays.nom as pays",
                    "cat.nom as categorie")
                ->where("cb.celliers_id", $cellierId)
                ->paginate(24);
    }

    /**
     *
     * Modifier l'inventaire d'une bouteille dans un cellier.
     *
     * @param int|string $cellierBouteilleId l'id du pivot où se trouve l'inventaire
     *
     */
    public function modifierInventaireBouteille(Request $request, int $cellierBouteilleId) {
        $cellierBouteille = CellierBouteille::find($cellierBouteilleId);

        $cellierBouteille->inventaire = $request->inventaire;

        if(!$cellierBouteille->save()) {
            return response()->json([
                "message" => "Erreur lors de la mise à jour de l'inventaire"
            ], 400);
        };

        return response()->json([
            "message" => "Modification réussie"
        ], 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bouteilleCellier = new CellierBouteille;
        $bouteilleCellier -> bouteilles_id = $request->bouteilles_id;
        $bouteilleCellier -> celliers_id = $request->celliers_id;
        $bouteilleCellier -> inventaire = $request->inventaire;
        $newBouteilleCellier = $bouteilleCellier -> save();

        return response()->json([
            "message" => "ajout réussi !"
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CellierBouteille  $cellierBouteille
     * @return \Illuminate\Http\Response
     */
    public function show(CellierBouteille $cellierBouteille)
    {
        return new BouteilleResource($cellierBouteille);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CellierBouteille  $cellierBouteille
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cellier $cellier, Bouteille $bouteille)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CellierBouteille  $cellierBouteille
     * @return \Illuminate\Http\Response
     */
    public function destroy(CellierBouteille $cellierBouteille)
    {
        //
    }

}
