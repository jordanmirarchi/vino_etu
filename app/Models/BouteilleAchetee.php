<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BouteilleAchetee extends Model {
    use HasFactory;

    protected $table = "bouteilles_achetees";

    protected $guarded = [];
}
