<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CellierBouteille extends Pivot
{
    protected $table = "celliers_bouteilles";
}